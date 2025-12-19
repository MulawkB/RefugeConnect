<?php
namespace App\Http\Controllers;
use App\Models\Animal;
class AnimalController extends Controller
{
    public function show($id)
    {
        $animal = Animal::find($id);
        if (!$animal) {
            return 'Page non trouvée.';
        }
        return view('pages.animal-details', ['animal' => $animal]);
    }
    public function create()
    {
        Animal::create([
            'name' => 'Coquillette',
            'species' => 'Chien',
            'age' => 3,
            'desc' => 'Une Shiba Inu vive et joyeuse, toujours prête à jouer et à explorer. Coquillette est curieuse, intelligente et très expressive, avec un petit caractère indépendant mais plein de tendresse pour ceux qu’elle aime.',
            "photo" => "coquillette.jpg",
        ]);
    }
    public function update($id)
    {
        $animal = Animal::find($id);
        if (!$animal) {
            return 'Animal avec id ' . $id . ' non trouvé donc non modifiable';
        }
        $animal->update([
            'name' => $animal->name . ' Nom Modifié',
        ]);
        return "Animal " . $id . " mis à jour avec succès.";
    }
    public function delete($id)
    {
        $animal = Animal::find($id);
        if (!$animal) {
            return 'Animal avec id ' . $id . ' non trouvé ou déja supprimé';
        }
        $animal->delete();
        return "Animal " . $id . " supprimé avec succès.";
    }
}