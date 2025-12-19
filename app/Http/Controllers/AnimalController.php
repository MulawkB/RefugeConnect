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
            'name' => 'Bella',
            'species' => 'Chien',
            'age' => 5,
            'desc' => 'Une labrador joueuse et affectueuse qui adore la compagnie.',
            "photo" => "bella.jpg",
        ]);
        Animal::create([
            'name' => 'Luna',
            'species' => 'Chat',
            'age' => 3,
            'desc' => 'Une chatte calme et câline qui aime les endroits tranquilles.',
            "photo" => "luna.jpg",
        ]);
        Animal::create([
            'name' => 'Max',
            'species' => 'Chien',
            'age' => 2,
            'desc' => 'Un jeune chiot plein d’énergie qui adore courir et jouer dehors.',
            "photo" => "max.jpg",
        ]);
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
            'name' => 'Nom Modifié',
            'species' => 'Espèce Modifiée',
            'age' => 4,
            'desc' => 'Description Modifiée',
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