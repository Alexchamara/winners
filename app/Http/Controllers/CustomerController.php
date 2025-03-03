<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::with('user')->get();
        return view('admin.customer.index', compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
        ]);

        DB::transaction(function () use ($validated) {
            // Create the user
            $user = User::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
            ]);

            // Create the customer
            Customer::create([
                'user_id' => $user->id,
                'phone' => $validated['phone'],
                'address' => $validated['address'],
            ]);

            // Assign player role
            $playerRole = Role::where('name', 'player')->first();
            if ($playerRole) {
                $user->roles()->attach($playerRole->id);
            }
        });

        return redirect()->route('admin.customers.index')
            ->with('success', 'Customer created successfully');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $customer->user_id,
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'password' => 'nullable|min:8',
        ]);

        DB::transaction(function () use ($validated, $customer) {
            // Update user
            $userData = [
                'name' => $validated['name'],
                'email' => $validated['email'],
            ];

            // Update password only if provided
            if (!empty($validated['password'])) {
                $userData['password'] = Hash::make($validated['password']);
            }

            $customer->user->update($userData);

            // Update customer
            $customer->update([
                'phone' => $validated['phone'],
                'address' => $validated['address'],
            ]);
        });

        return redirect()->route('admin.customers.index')
            ->with('success', 'Customer updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        DB::transaction(function () use ($customer) {
            $user = $customer->user;

            // Delete customer first (this is important for foreign key constraints)
            $customer->delete();

            // Remove role relationships
            $user->roles()->detach();

            // Delete the user
            $user->delete();
        });

        return redirect()->route('admin.customers.index')
            ->with('success', 'Customer deleted successfully');
    }

    /**
     * Toggle winner status for a customer.
     */
    public function toggleWinner(Request $request, Customer $customer)
    {
        $validated = $request->validate([
            'is_winner' => 'required|boolean',
        ]);

        $customer->update([
            'is_winner' => $validated['is_winner'],
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Winner status updated successfully',
        ]);
    }
}
