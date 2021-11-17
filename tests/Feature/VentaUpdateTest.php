<?php

namespace Tests\Feature;

use App\Models\Venta;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class VentaUpdateTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {

        $venta = Venta::find(1);


        $view = $this->view('edit', ['venta' => $venta]);

        $view->assertSee('Juan');
    }
}
