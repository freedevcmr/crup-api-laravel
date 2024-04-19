<?php

namespace App\Http\Controllers\Api;

use Exception;
use App\Models\Produit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\EditProduitRequest;
use App\Http\Requests\CreateProduitRequest;

class ProduitController extends Controller
{
     // Logique pour créer un produit
    public function create(CreateProduitRequest $request)
    {

        
         try{

                // Créer un nouveau produit
            $produit = new Produit();
            $produit->libelle = $request->libelle;
            $produit->marque = $request->marque;
            $produit->description = $request->description;
            $produit->created_at = now();
            $produit->updated_at = now();
            $produit->save();

            return response()->json(['message' => 'Successfully created product', 'produit' => $produit], 201);

         }catch(Exception $e){

            return response()->json($e);
            
         }

       
    }

    // Logique pour mettre à jour un produit avec l'id $id
    public function update(EditProduitRequest $request, $id)
    {
         
     try{
        // Rechercher le produit à mettre à jour
        $produit = Produit::find($id);
        if (!$produit) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        // Mettre à jour les champs du produit
        $produit->libelle = $request->libelle;
        $produit->marque = $request->marque;
        $produit->description = $request->description;
        $produit->updated_at = now();
        $produit->save();

        return response()->json(['message' => 'Product successfully updated', 'produit' => $produit], 200);


         }catch(Exception $e){

            return response()->json($e);
            
         }

    }


    // Logique pour mettre à jour un produit avec l'id $id
    public function delete($id)
    {
         try{
            // Rechercher le produit à supprimer
            $produit = Produit::find($id);
            if (!$produit) {
                return response()->json(['message' => 'Product not found'], 404);
            }

            // Supprimer le produit
            $produit->delete();

            return response()->json(['message' => 'Product successfully deleted'], 200);

         }catch(Exception $e){

            return response()->json($e);
            
         }

    }

     // Logique pour afficher un produit avec l'id $id
     public function show($id)
    {      
         try{
         // Rechercher le produit
            $produit = Produit::find($id);
            if (!$produit) {
                return response()->json(['message' => 'Product not found'], 404);
            }

            return response()->json($produit, 200);
        }catch(Exception $e){

            return response()->json($e);
            
         }
    }


    public function index()
    {
         try{
            $produits = Produit::all();

            return response()->json($produits, 200);

        }catch(Exception $e){

            return response()->json($e);
            
         }
    }

}
