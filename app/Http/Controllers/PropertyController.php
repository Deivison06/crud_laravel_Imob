<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PropertyController extends Controller
{
    // Lista todos os imóveis
    public function index()
    {
        $imoveis = Property::all();
        return view('property.index', [
            'imoveis' => $imoveis
        ]);
    }

    // Exibe o formulário de criação de um novo imóvel
    public function create()
    {
        return view('property.create');
    }

    // Exibe um imóvel específico pelo slug
    public function show($slug)
    {
        $imovel = Property::where('slug', $slug)->first();
        if ($imovel) {
            return view('property.show', [
                'imovel' => $imovel
            ]);
        } else {
            return redirect()->route('imoveis.index')->with('error', 'Imóvel não encontrado.');
        }
    }

    // Armazena um novo imóvel
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255|unique:properties,title',
            'description' => 'required|string',
            'rental_price' => 'required|numeric',
            'sale_price' => 'required|numeric',
        ]);

        $imovel = Property::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'rental_price' => $validated['rental_price'],
            'sale_price' => $validated['sale_price'],
            'slug' => Str::slug($validated['title']),
        ]);

        return redirect()->route('imoveis.index')->with('success', 'Imóvel criado com sucesso.');
    }

    // Exibe o formulário de edição de um imóvel específico pelo slug
    public function edit($slug)
    {
        $imovel = Property::where('slug', $slug)->first();
        if ($imovel) {
            return view('property.edit', [
                'imovel' => $imovel
            ]);
        } else {
            return redirect()->route('imoveis.index')->with('error', 'Imóvel não encontrado.');
        }
    }

    // Atualiza um imóvel específico pelo slug
    public function update(Request $request, $slug)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'rental_price' => 'required|numeric',
            'sale_price' => 'required|numeric',
        ]);

        $imovel = Property::where('slug', $slug)->first();
        if ($imovel) {
            $imovel->update([
                'title' => $validated['title'],
                'description' => $validated['description'],
                'rental_price' => $validated['rental_price'],
                'sale_price' => $validated['sale_price'],
                'slug' => Str::slug($validated['title']),
            ]);
            return redirect()->route('imoveis.index')->with('success', 'Imóvel atualizado com sucesso.');
        } else {
            return redirect()->route('imoveis.index')->with('error', 'Imóvel não encontrado.');
        }
    }

    /**
     * Remove um imóvel específico pelo slug
     *
     * @param [type] $slug
     * @return redirect()
     */
    public function remove($slug)
    {
        $imovel = Property::where('slug', $slug)->first();
        if ($imovel) {
            $imovel->delete();
            return redirect()->route('imoveis.index')->with('success', 'Imóvel removido com sucesso.');
        } else {
            return redirect()->route('imoveis.index')->with('error', 'Imóvel não encontrado.');
        }
    }
}
