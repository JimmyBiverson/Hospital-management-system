<?php

namespace Tests\Feature;

use Tests\TestCase;

class RoleLoginTest extends TestCase
{
    public function test_each_role_can_log_in(): void
    {
        foreach (['admin', 'doctor', 'patient', 'nurse', 'receptionist', 'laboratorist', 'pharmacist', 'accountant'] as $role) {
            $email = $role . '@bayanno.local';

            $response = $this->post('/login', [
                'email' => $email,
                'password' => 'password',
                'role' => $role,
            ]);

            $response->assertRedirect('/dashboard');
            $this->assertSame(ucfirst($role), session('auth_role'));
            $this->assertSame($email, session('auth_email'));
            $this->app['session']->forget(['auth_role', 'auth_email']);
        }
    }
}
