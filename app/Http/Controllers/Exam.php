<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class Exam extends Controller
{
    protected $availableBeerStylesComparison = [
        1 => "American Amber Ale, American Brown Ale, American Pale Ale",
        2 => "American Amber Ale, American Pale Ale, California Common",
        3 => "American Barleywine, Double IPA, English Barleywine",
        4 => "American Barleywine, English Barleywine, Wee Heavy",
        5 => "American Barleywine, Old Ale, Wee Heavy",
        6 => "American Brown Ale, American Pale Ale, California Common",
        7 => "American Brown Ale, British Brown Ale, Dark Mild",
        9 => "American IPA, Double IPA, English IPA",
        10 => "American Pale Ale, Belgian Pale Ale, Strong Bitter",
        11 => "American Pale Ale, English Barleywine, Wee Heavy",
        12 => "American Stout, Foreign Extra Stout, Irish Stout",
        13 => "American Stout, Irish Stout, Oatmeal Stout",
        14 => "American Stout, American Porter, Irish Stout",
        15 => "American Stout, Irish Stout, Sweet Stout",
        16 => "American Stout, Foreign Extra Stout, Oatmeal Stout",
        17 => "American Porter, American Stout, Foreign Extra Stout",
        18 => "American Stout, Foreign Extra Stout, Sweet Stout",
        21 => "American Wheat Beer, Lambic, Weissbier",
        22 => "American Wheat Beer, Weissbier, Witbier",
        23 => "Baltic Porter, Belgian Dark Strong Ale, Imperial Stout",
        24 => "Belgian Blond Ale, Belgian Dubbel, Belgian Tripel",
        25 => "Belgian Blond Ale, Belgian Golden Strong Ale, Belgian Tripel",
        26 => "Belgian Blond Ale, Belgian Pale Ale, Saison",
        27 => "Belgian Dark Strong Ale, Double IPA, Wee Heavy",
        28 => "Belgian Dark Strong Ale, Belgian Dubbel, Weizenbock",
        29 => "Belgian Pale Ale, Bière de Garde, Saison",
        30 => "Berliner Weisse, Flanders Red Ale, Lambic",
        31 => "Berliner Weisse, Gueuze, Lambic",
        32 => "Berliner Weisse, Weissbier, Witbier",
        34 => "Bière de Garde, California Common, International Amber Lager",
        35 => "Blonde Ale, Cream Ale, Kölsch",
        37 => "Czech Premium Pale Lager, German Pils, International Pale Lager",
        38 => "American Lager, Czech Premium Pale Lager, German Pils",
        39 => "American Porter, English Porter, Irish Stout",
        41 => "British Brown Ale, English Porter, Munich Dunkel",
        42 => "English Porter, Munich Dunkel, Schwarzbier",
        44 => "California Common, Irish Red Ale, Märzen",
        46 => "Cream Ale, Kölsch, Munich Helles",
        47 => "International Dark Lager, Munich Dunkel, Schwarzbier",
        48 => "Doppelbock, Eisbock, Helles Bock",
        49 => "Doppelbock, Dunkles Bock, Eisbock",
        50 => "Doppelbock, Dunkles Bock, Helles Bock",
        51 => "Doppelbock, Dunkles Bock, Weizenbock",
        52 => "German Pils, German Helles Exportbier, Munich Helles",
        53 => "Foreign Extra Stout, Irish Stout, Sweet Stout",
        54 => "American Porter, Irish Stout, Schwarzbier",
        56 => "Dunkles Weissbier, Weissbier, Weizenbock",
        57 => "Altbier, International Amber Lager, Irish Red Ale",
        58 => "Altbier, International Amber Lager, Märzen",
        59 => "Altbier, Best Bitter, Märzen",
        60 => "Altbier, Märzen, Vienna Lager",
        61 => "Dunkles Bock, Eisbock, Helles Bock",
        62 => "English Barleywine, Imperial Stout, Wee Heavy",
        63 => "English Barleywine, Old Ale, Wee Heavy",
        64 => "Flanders Red Ale, Lambic, Oud Bruin",
        65 => "American Porter, Baltic Porter, Foreign Extra Stout",
        66 => "American Porter, Foreign Extra Stout, Sweet Stout",
        67 => "Fruit Lambic, Gueuze, Lambic",
        68 => "German Pils, Munich Helles, Schwarzbier",
        69 => "International Amber Lager, Irish Red Ale, Märzen",
        70 => "American Lager, American Light Lager, International Pale Lager",
        71 => "Dark Mild, Ordinary Bitter, Scottish Light",
        73 => "Munich Helles, Munich Dunkel, Märzen",
        74 => "Munich Helles, Märzen, Vienna Lager",
        75 => "Best Bitter, International Amber Lager, Märzen",
        76 => "Dunkles Bock, Märzen, Rauchbier",
        77 => "Scottish Export, Scottish Heavy, Wee Heavy",
        78 => "Dark Mild, Scottish Heavy, Scottish Light",
        79 => "Scottish Export, Scottish Heavy, Scottish Light",
        80 => "Ordinary Bitter, Scottish Heavy, Scottish Light",
        81 => "Scottish Heavy, Scottish Light, Wee Heavy",
        82 => "Scottish Export, Scottish Light, Wee Heavy",
        84 => "Best Bitter, Ordinary Bitter, Strong Bitter",
        85 => "Lambic, Weissbier, Witbier",
        86 => "Dunkles Bock, Märzen, Munich Dunkel",
        87 => "American Lager, American Wheat Beer, Cream Ale",
        88 => "American Light Lager, Czech Pale Lager, German Leichtbier",
        89 => "Festbier, Helles Bock, Munich Helles",
        90 => "Czech Amber Lager, Dunkles Bock, Märzen",
        91 => "American Pale Ale, Best Bitter, British Golden Ale",
        92 => "Australian Sparkling Ale, Best Bitter, British Golden Ale",
        93 => "Foreign Extra Stout, Irish Extra Stout, Irish Stout",
        94 => "Foreign Extra Stout, Sweet Stout, Tropical Stout",
        95 => "British Strong Ale, English Barleywine, Old Ale",
        96 => "American IPA, Belgian Golden Strong Ale, Belgian IPA",
        105 => "American Barleywine, American Strong Ale, Double IPA",
        106 => "Belgian Tripel, German Pils, Belgian Single",
        107 => "Czech Amber Lager, International Amber Lager, Vienna",
        108 => "Czech Pale Lager, Czech Premium Pale Lager, German Pils",
        109 => "American Barleywine, American Wheat Beer, Wheatwine",
        110 => "American Porter, American Stout, Imperial Stout",
    ];

    protected $availableRecipeStyles = [
        'Belgian Tripel',
        'Doppelbock',
        'American Porter',
        'Irish Stout',
        'Märzen',
        'American IPA',
        'Weissbier',
        'Strong Bitter',
        'Festbier',
        'Czech Premium Pale Lager',
        'German Pils',
        'Double IPA',
    ];

    protected $availableBeerCharacteristics = [
        "cloudiness",
        "astringency",
        "fruitiness",
        "bitterness",
        "acetaldehyde",
        "buttery",
        "phenolic",
        "sourness",
        "cardboard",
        "alcoholic",
        "low head retention",
        "light body",
        "cooked corn",
        "sherry-like",
    ];

    public function index(): View {
        $beerStylesComparison = [];
        $beerRecipeStyle = null;
        $beerCharacteristics = null;

        foreach (array_rand($this->availableBeerStylesComparison, 2) as $key) {
            $beerStylesComparison[] = $this->availableBeerStylesComparison[$key];
        }
        $beerRecipeStyle = $this->availableRecipeStyles[array_rand($this->availableRecipeStyles, 1)];
        foreach (array_rand($this->availableBeerCharacteristics, 3) as $key) {
            $beerCharacteristics[] = $this->availableBeerCharacteristics[$key];
        }

        return view('exam', compact('beerStylesComparison', 'beerRecipeStyle', 'beerCharacteristics'));
    }
}
