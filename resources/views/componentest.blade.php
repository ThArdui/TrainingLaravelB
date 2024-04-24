<x-modele>


    <x-slot name="titreH1">
        Welcome !
    </x-slot>

    Je suis ce qui va apparaître dans $slot car je ne fais pas partie d'un 'x-slot'.
</x-modele>
{{ $scripts ?? '<script>console.log("Pas de titre de page !");</script>' }}
