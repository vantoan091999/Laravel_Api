<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\RepositoryInterface\CustomerRepositoryInterface;

class CustomerController extends Controller
{
    protected $customerRepository;
    public function __construct(CustomerRepositoryInterface $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    public function index()
    {
        return $this->customerRepository->getAll();
        // return view('welcome');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'address' => 'required',

        ]);
        $data = [
            'name' => $request->name,
        ];
        $this->customerRepository->create($request->all());
        return $this->customerRepository->getAll();

    }

    public function update($id, Request $request)
    {
        return $this->customerRepository->update($id, $request->all());
    }
    
    public function show($id)
    {
        return $this->customerRepository->find($id);    
    }

    public function delete($id) 
    {
        return $this->customerRepository->delete($id);
    }
}
