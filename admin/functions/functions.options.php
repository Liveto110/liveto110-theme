<?php
add_action('init', 'of_options');
if (!function_exists('of_options')) {
	function of_options()
	{
		$of_categories = array();
		$of_categories_obj = get_categories('hide_empty=0');
		foreach ($of_categories_obj as $of_cat) {
			$of_categories[$of_cat->cat_ID] = $of_cat->cat_name;
		}
		$categories_tmp = array_unshift($of_categories, "Select a category:");
//Access the WordPress Pages via an Array
		$of_pages = array();
		$of_pages_obj = get_pages();
		foreach ($of_pages_obj as $of_page) {
			$of_pages[$of_page->ID] = $of_page->post_name;
		}
		$of_pages_tmp = array_unshift($of_pages,"Select page");
//Sample Homepage blocks for the layout manager (sorter)
		$of_options_homepage_blocks = array
		(
			"disabled" => array(
		    "placebo" => "placebo", //REQUIRED!
		    ),
			"enabled" => array(
		    "placebo" => "placebo", //REQUIRED!
		    "section_intro" 				=> "Intro",
		    "section_about_liveto110" 		=> "About LiveTo110",
		    "section_special_offers" 		=> "Special Offers",
		    "section_latest_articles" 		=> "Recent Posts",
		    ),
			);
		$names = array();
		$taxonomies = get_terms('project-type', 'orderby=count&hide_empty=0');
		foreach ($taxonomies as $tax){
			$names[$tax->slug] = $tax->name;
		}
		$placebo_array = array("placebo" => "placebo");
		$portfolio_categorie = $placebo_array + $names;
		$of_options_portfolio_categories = array
		(
			"disabled" => array(
		    "placebo" => "placebo", //REQUIRED!
		    ),
			"enabled" => $portfolio_categorie,
			);
		/*-----------------------------------------------------------------------------------*/
		/* TO DO: Add options/functions that use these */
		/*-----------------------------------------------------------------------------------*/

// Google fonts weight
		$google_fonts_weight = array(
			"none" => "font-weight",
			"300" => "300",
			"400" => "400",
			"500" => "500",
			"600" => "600",
			"700" => "700",
			"900" => "900"
			);
// Google fonts weight
		$google_fonts_style = array(
			"normal" => "font-style",
			"normal" => "Normal",
			"italic" => "Italic",
			);
// Google fonts
		$google_fonts = array(
			"none" => "Select Font",
			// "ABeeZee" => "ABeeZee",
			// "Abel" => "Abel",
			// "Abril Fatface" => "Abril Fatface",
			// "Aclonica" => "Aclonica",
			// "Acme" => "Acme",
			// "Actor" => "Actor",
			// "Adamina" => "Adamina",
			// "Advent Pro" => "Advent Pro",
			// "Aguafina Script" => "Aguafina Script",
			// "Akronim" => "Akronim",
			// "Aladin" => "Aladin",
			// "Aldrich" => "Aldrich",
			// "Alegreya" => "Alegreya",
			// "Alegreya SC" => "Alegreya SC",
			// "Alex Brush" => "Alex Brush",
			// "Alfa Slab One" => "Alfa Slab One",
			// "Alice" => "Alice",
			// "Alike" => "Alike",
			// "Alike Angular" => "Alike Angular",
			// "Allan" => "Allan",
			// "Allerta" => "Allerta",
			// "Allerta Stencil" => "Allerta Stencil",
			// "Allura" => "Allura",
			// "Almendra" => "Almendra",
			// "Almendra Display" => "Almendra Display",
			// "Almendra SC" => "Almendra SC",
			// "Amarante" => "Amarante",
			// "Amaranth" => "Amaranth",
			// "Amatic SC" => "Amatic SC",
			// "Amethysta" => "Amethysta",
			// "Anaheim" => "Anaheim",
			// "Andada" => "Andada",
			// "Andika" => "Andika",
			// "Angkor" => "Angkor",
			// "Annie Use Your Telescope" => "Annie Use Your Telescope",
			// "Anonymous Pro" => "Anonymous Pro",
			// "Antic" => "Antic",
			// "Antic Didone" => "Antic Didone",
			// "Antic Slab" => "Antic Slab",
			// "Anton" => "Anton",
			// "Arapey" => "Arapey",
			// "Arbutus" => "Arbutus",
			// "Arbutus Slab" => "Arbutus Slab",
			// "Architects Daughter" => "Architects Daughter",
			// "Archivo Black" => "Archivo Black",
			// "Archivo Narrow" => "Archivo Narrow",
			// "Arimo" => "Arimo",
			// "Arizonia" => "Arizonia",
			// "Armata" => "Armata",
			// "Artifika" => "Artifika",
			// "Arvo" => "Arvo",
			// "Asap" => "Asap",
			// "Asset" => "Asset",
			// "Astloch" => "Astloch",
			// "Asul" => "Asul",
			// "Atomic Age" => "Atomic Age",
			// "Aubrey" => "Aubrey",
			// "Audiowide" => "Audiowide",
			// "Autour One" => "Autour One",
			// "Average" => "Average",
			// "Average Sans" => "Average Sans",
			// "Averia Gruesa Libre" => "Averia Gruesa Libre",
			// "Averia Libre" => "Averia Libre",
			// "Averia Sans Libre" => "Averia Sans Libre",
			// "Averia Serif Libre" => "Averia Serif Libre",
			// "Bad Script" => "Bad Script",
			// "Balthazar" => "Balthazar",
			// "Bangers" => "Bangers",
			// "Basic" => "Basic",
			// "Battambang" => "Battambang",
			// "Baumans" => "Baumans",
			// "Bayon" => "Bayon",
			// "Belgrano" => "Belgrano",
			// "Belleza" => "Belleza",
			// "BenchNine" => "BenchNine",
			// "Bentham" => "Bentham",
			// "Berkshire Swash" => "Berkshire Swash",
			// "Bevan" => "Bevan",
			// "Bigelow Rules" => "Bigelow Rules",
			// "Bigshot One" => "Bigshot One",
			// "Bilbo" => "Bilbo",
			// "Bilbo Swash Caps" => "Bilbo Swash Caps",
			// "Bitter" => "Bitter",
			// "Black Ops One" => "Black Ops One",
			// "Bokor" => "Bokor",
			// "Bonbon" => "Bonbon",
			// "Boogaloo" => "Boogaloo",
			// "Bowlby One" => "Bowlby One",
			// "Bowlby One SC" => "Bowlby One SC",
			// "Brawler" => "Brawler",
			// "Bree Serif" => "Bree Serif",
			// "Bubblegum Sans" => "Bubblegum Sans",
			// "Bubbler One" => "Bubbler One",
			// "Buda" => "Buda",
			// "Buenard" => "Buenard",
			// "Butcherman" => "Butcherman",
			// "Butterfly Kids" => "Butterfly Kids",
			// "Cabin" => "Cabin",
			// "Cabin Condensed" => "Cabin Condensed",
			// "Cabin Sketch" => "Cabin Sketch",
			// "Caesar Dressing" => "Caesar Dressing",
			// "Cagliostro" => "Cagliostro",
			// "Calligraffitti" => "Calligraffitti",
			// "Cambo" => "Cambo",
			// "Candal" => "Candal",
			// "Cantarell" => "Cantarell",
			// "Cantata One" => "Cantata One",
			// "Cantora One" => "Cantora One",
			// "Capriola" => "Capriola",
			// "Cardo" => "Cardo",
			// "Carme" => "Carme",
			// "Carrois Gothic" => "Carrois Gothic",
			// "Carrois Gothic SC" => "Carrois Gothic SC",
			// "Carter One" => "Carter One",
			// "Caudex" => "Caudex",
			// "Cedarville Cursive" => "Cedarville Cursive",
			// "Ceviche One" => "Ceviche One",
			// "Changa One" => "Changa One",
			// "Chango" => "Chango",
			// "Chau Philomene One" => "Chau Philomene One",
			// "Chela One" => "Chela One",
			// "Chelsea Market" => "Chelsea Market",
			// "Chenla" => "Chenla",
			// "Cherry Cream Soda" => "Cherry Cream Soda",
			// "Cherry Swash" => "Cherry Swash",
			// "Chewy" => "Chewy",
			// "Chicle" => "Chicle",
			// "Chivo" => "Chivo",
			// "Cinzel" => "Cinzel",
			// "Cinzel Decorative" => "Cinzel Decorative",
			// "Clicker Script" => "Clicker Script",
			// "Coda" => "Coda",
			// "Coda Caption" => "Coda Caption",
			// "Codystar" => "Codystar",
			// "Combo" => "Combo",
			// "Comfortaa" => "Comfortaa",
			// "Coming Soon" => "Coming Soon",
			// "Concert One" => "Concert One",
			// "Condiment" => "Condiment",
			// "Content" => "Content",
			// "Contrail One" => "Contrail One",
			// "Convergence" => "Convergence",
			// "Cookie" => "Cookie",
			// "Copse" => "Copse",
			// "Corben" => "Corben",
			// "Courgette" => "Courgette",
			// "Cousine" => "Cousine",
			// "Coustard" => "Coustard",
			// "Covered By Your Grace" => "Covered By Your Grace",
			// "Crafty Girls" => "Crafty Girls",
			// "Creepster" => "Creepster",
			// "Crete Round" => "Crete Round",
			// "Crimson Text" => "Crimson Text",
			// "Croissant One" => "Croissant One",
			// "Crushed" => "Crushed",
			// "Cuprum" => "Cuprum",
			// "Cutive" => "Cutive",
			// "Cutive Mono" => "Cutive Mono",
			// "Damion" => "Damion",
			// "Dancing Script" => "Dancing Script",
			// "Dangrek" => "Dangrek",
			// "Dawning of a New Day" => "Dawning of a New Day",
			// "Days One" => "Days One",
			// "Delius" => "Delius",
			// "Delius Swash Caps" => "Delius Swash Caps",
			// "Delius Unicase" => "Delius Unicase",
			// "Della Respira" => "Della Respira",
			// "Denk One" => "Denk One",
			// "Devonshire" => "Devonshire",
			// "Didact Gothic" => "Didact Gothic",
			// "Diplomata" => "Diplomata",
			// "Diplomata SC" => "Diplomata SC",
			// "Domine" => "Domine",
			// "Donegal One" => "Donegal One",
			// "Doppio One" => "Doppio One",
			// "Dorsa" => "Dorsa",
			// "Dosis" => "Dosis",
			// "Dr Sugiyama" => "Dr Sugiyama",
			// "Droid Sans" => "Droid Sans",
			// "Droid Sans Mono" => "Droid Sans Mono",
			// "Droid Serif" => "Droid Serif",
			// "Duru Sans" => "Duru Sans",
			// "Dynalight" => "Dynalight",
			// "EB Garamond" => "EB Garamond",
			// "Eagle Lake" => "Eagle Lake",
			// "Eater" => "Eater",
			// "Economica" => "Economica",
			// "Electrolize" => "Electrolize",
			// "Elsie" => "Elsie",
			// "Elsie Swash Caps" => "Elsie Swash Caps",
			// "Emblema One" => "Emblema One",
			// "Emilys Candy" => "Emilys Candy",
			// "Engagement" => "Engagement",
			// "Englebert" => "Englebert",
			// "Enriqueta" => "Enriqueta",
			// "Erica One" => "Erica One",
			// "Esteban" => "Esteban",
			// "Euphoria Script" => "Euphoria Script",
			// "Ewert" => "Ewert",
			// "Exo" => "Exo",
			// "Expletus Sans" => "Expletus Sans",
			// "Fanwood Text" => "Fanwood Text",
			// "Fascinate" => "Fascinate",
			// "Fascinate Inline" => "Fascinate Inline",
			// "Faster One" => "Faster One",
			// "Fasthand" => "Fasthand",
			// "Federant" => "Federant",
			// "Federo" => "Federo",
			// "Felipa" => "Felipa",
			// "Fenix" => "Fenix",
			// "Finger Paint" => "Finger Paint",
			// "Fjalla One" => "Fjalla One",
			// "Fjord One" => "Fjord One",
			// "Flamenco" => "Flamenco",
			// "Flavors" => "Flavors",
			// "Fondamento" => "Fondamento",
			// "Fontdiner Swanky" => "Fontdiner Swanky",
			// "Forum" => "Forum",
			// "Francois One" => "Francois One",
			// "Freckle Face" => "Freckle Face",
			// "Fredericka the Great" => "Fredericka the Great",
			// "Fredoka One" => "Fredoka One",
			// "Freehand" => "Freehand",
			// "Fresca" => "Fresca",
			// "Frijole" => "Frijole",
			// "Fruktur" => "Fruktur",
			// "Fugaz One" => "Fugaz One",
			// "GFS Didot" => "GFS Didot",
			// "GFS Neohellenic" => "GFS Neohellenic",
			// "Gabriela" => "Gabriela",
			// "Gafata" => "Gafata",
			// "Galdeano" => "Galdeano",
			// "Galindo" => "Galindo",
			// "Gentium Basic" => "Gentium Basic",
			// "Gentium Book Basic" => "Gentium Book Basic",
			// "Geo" => "Geo",
			// "Geostar" => "Geostar",
			// "Geostar Fill" => "Geostar Fill",
			// "Germania One" => "Germania One",
			// "Gilda Display" => "Gilda Display",
			// "Give You Glory" => "Give You Glory",
			// "Glass Antiqua" => "Glass Antiqua",
			// "Glegoo" => "Glegoo",
			// "Gloria Hallelujah" => "Gloria Hallelujah",
			// "Goblin One" => "Goblin One",
			// "Gochi Hand" => "Gochi Hand",
			// "Gorditas" => "Gorditas",
			// "Goudy Bookletter 1911" => "Goudy Bookletter 1911",
			// "Graduate" => "Graduate",
			// "Grand Hotel" => "Grand Hotel",
			// "Gravitas One" => "Gravitas One",
			// "Great Vibes" => "Great Vibes",
			// "Griffy" => "Griffy",
			// "Gruppo" => "Gruppo",
			// "Gudea" => "Gudea",
			// "Habibi" => "Habibi",
			// "Hammersmith One" => "Hammersmith One",
			// "Hanalei" => "Hanalei",
			// "Hanalei Fill" => "Hanalei Fill",
			// "Handlee" => "Handlee",
			// "Hanuman" => "Hanuman",
			// "Happy Monkey" => "Happy Monkey",
			// "Headland One" => "Headland One",
			// "Henny Penny" => "Henny Penny",
			// "Herr Von Muellerhoff" => "Herr Von Muellerhoff",
			// "Holtwood One SC" => "Holtwood One SC",
			// "Homemade Apple" => "Homemade Apple",
			// "Homenaje" => "Homenaje",
			// "IM Fell DW Pica" => "IM Fell DW Pica",
			// "IM Fell DW Pica SC" => "IM Fell DW Pica SC",
			// "IM Fell Double Pica" => "IM Fell Double Pica",
			// "IM Fell Double Pica SC" => "IM Fell Double Pica SC",
			// "IM Fell English" => "IM Fell English",
			// "IM Fell English SC" => "IM Fell English SC",
			// "IM Fell French Canon" => "IM Fell French Canon",
			// "IM Fell French Canon SC" => "IM Fell French Canon SC",
			// "IM Fell Great Primer" => "IM Fell Great Primer",
			// "IM Fell Great Primer SC" => "IM Fell Great Primer SC",
			// "Iceberg" => "Iceberg",
			// "Iceland" => "Iceland",
			// "Imprima" => "Imprima",
			// "Inconsolata" => "Inconsolata",
			// "Inder" => "Inder",
			// "Indie Flower" => "Indie Flower",
			// "Inika" => "Inika",
			// "Irish Grover" => "Irish Grover",
			// "Istok Web" => "Istok Web",
			// "Italiana" => "Italiana",
			// "Italianno" => "Italianno",
			// "Jacques Francois" => "Jacques Francois",
			// "Jacques Francois Shadow" => "Jacques Francois Shadow",
			// "Jim Nightshade" => "Jim Nightshade",
			// "Jockey One" => "Jockey One",
			// "Jolly Lodger" => "Jolly Lodger",
			// "Josefin Sans" => "Josefin Sans",
			// "Josefin Slab" => "Josefin Slab",
			// "Joti One" => "Joti One",
			// "Judson" => "Judson",
			// "Julee" => "Julee",
			// "Julius Sans One" => "Julius Sans One",
			// "Junge" => "Junge",
			// "Jura" => "Jura",
			// "Just Another Hand" => "Just Another Hand",
			// "Just Me Again Down Here" => "Just Me Again Down Here",
			// "Kameron" => "Kameron",
			// "Karla" => "Karla",
			// "Kaushan Script" => "Kaushan Script",
			// "Kavoon" => "Kavoon",
			// "Keania One" => "Keania One",
			// "Kelly Slab" => "Kelly Slab",
			// "Kenia" => "Kenia",
			// "Khmer" => "Khmer",
			// "Kite One" => "Kite One",
			// "Knewave" => "Knewave",
			// "Kotta One" => "Kotta One",
			// "Koulen" => "Koulen",
			// "Kranky" => "Kranky",
			// "Kreon" => "Kreon",
			// "Kristi" => "Kristi",
			// "Krona One" => "Krona One",
			// "La Belle Aurore" => "La Belle Aurore",
			// "Lancelot" => "Lancelot",
			"Lato" => "Lato",
			// "League Script" => "League Script",
			// "Leckerli One" => "Leckerli One",
			// "Ledger" => "Ledger",
			// "Lekton" => "Lekton",
			// "Lemon" => "Lemon",
			// "Libre Baskerville" => "Libre Baskerville",
			// "Life Savers" => "Life Savers",
			// "Lilita One" => "Lilita One",
			// "Limelight" => "Limelight",
			// "Linden Hill" => "Linden Hill",
			// "Lobster" => "Lobster",
			// "Lobster Two" => "Lobster Two",
			// "Londrina Outline" => "Londrina Outline",
			// "Londrina Shadow" => "Londrina Shadow",
			// "Londrina Sketch" => "Londrina Sketch",
			// "Londrina Solid" => "Londrina Solid",
			// "Lora" => "Lora",
			// "Love Ya Like A Sister" => "Love Ya Like A Sister",
			// "Loved by the King" => "Loved by the King",
			// "Lovers Quarrel" => "Lovers Quarrel",
			// "Luckiest Guy" => "Luckiest Guy",
			// "Lusitana" => "Lusitana",
			// "Lustria" => "Lustria",
			// "Macondo" => "Macondo",
			// "Macondo Swash Caps" => "Macondo Swash Caps",
			// "Magra" => "Magra",
			// "Maiden Orange" => "Maiden Orange",
			// "Mako" => "Mako",
			// "Marcellus" => "Marcellus",
			// "Marcellus SC" => "Marcellus SC",
			// "Marck Script" => "Marck Script",
			// "Margarine" => "Margarine",
			// "Marko One" => "Marko One",
			// "Marmelad" => "Marmelad",
			// "Marvel" => "Marvel",
			// "Mate" => "Mate",
			// "Mate SC" => "Mate SC",
			// "Maven Pro" => "Maven Pro",
			// "McLaren" => "McLaren",
			// "Meddon" => "Meddon",
			// "MedievalSharp" => "MedievalSharp",
			// "Medula One" => "Medula One",
			// "Megrim" => "Megrim",
			// "Meie Script" => "Meie Script",
			// "Merienda" => "Merienda",
			// "Merienda One" => "Merienda One",
			// "Merriweather" => "Merriweather",
			// "Merriweather Sans" => "Merriweather Sans",
			// "Metal" => "Metal",
			// "Metal Mania" => "Metal Mania",
			// "Metamorphous" => "Metamorphous",
			// "Metrophobic" => "Metrophobic",
			// "Michroma" => "Michroma",
			// "Milonga" => "Milonga",
			// "Miltonian" => "Miltonian",
			// "Miltonian Tattoo" => "Miltonian Tattoo",
			// "Miniver" => "Miniver",
			// "Miss Fajardose" => "Miss Fajardose",
			// "Modern Antiqua" => "Modern Antiqua",
			// "Molengo" => "Molengo",
			// "Molle" => "Molle",
			// "Monda" => "Monda",
			// "Monofett" => "Monofett",
			// "Monoton" => "Monoton",
			// "Monsieur La Doulaise" => "Monsieur La Doulaise",
			// "Montaga" => "Montaga",
			// "Montez" => "Montez",
			// "Montserrat" => "Montserrat",
			// "Montserrat Alternates" => "Montserrat Alternates",
			// "Montserrat Subrayada" => "Montserrat Subrayada",
			// "Moul" => "Moul",
			// "Moulpali" => "Moulpali",
			// "Mountains of Christmas" => "Mountains of Christmas",
			// "Mouse Memoirs" => "Mouse Memoirs",
			// "Mr Bedfort" => "Mr Bedfort",
			// "Mr Dafoe" => "Mr Dafoe",
			// "Mr De Haviland" => "Mr De Haviland",
			// "Mrs Saint Delafield" => "Mrs Saint Delafield",
			// "Mrs Sheppards" => "Mrs Sheppards",
			// "Muli" => "Muli",
			// "Mystery Quest" => "Mystery Quest",
			// "Neucha" => "Neucha",
			// "Neuton" => "Neuton",
			// "New Rocker" => "New Rocker",
			// "News Cycle" => "News Cycle",
			// "Niconne" => "Niconne",
			// "Nixie One" => "Nixie One",
			// "Nobile" => "Nobile",
			// "Nokora" => "Nokora",
			// "Norican" => "Norican",
			// "Nosifer" => "Nosifer",
			// "Nothing You Could Do" => "Nothing You Could Do",
			// "Noticia Text" => "Noticia Text",
			// "Noto Sans" => "Noto Sans",
			// "Noto Serif" => "Noto Serif",
			// "Nova Cut" => "Nova Cut",
			// "Nova Flat" => "Nova Flat",
			// "Nova Mono" => "Nova Mono",
			// "Nova Oval" => "Nova Oval",
			// "Nova Round" => "Nova Round",
			// "Nova Script" => "Nova Script",
			// "Nova Slim" => "Nova Slim",
			// "Nova Square" => "Nova Square",
			// "Numans" => "Numans",
			// "Nunito" => "Nunito",
			// "Odor Mean Chey" => "Odor Mean Chey",
			// "Offside" => "Offside",
			// "Old Standard TT" => "Old Standard TT",
			// "Oldenburg" => "Oldenburg",
			// "Oleo Script" => "Oleo Script",
			// "Oleo Script Swash Caps" => "Oleo Script Swash Caps",
			// "Open Sans" => "Open Sans",
			// "Open Sans Condensed" => "Open Sans Condensed",
			// "Oranienbaum" => "Oranienbaum",
			// "Orbitron" => "Orbitron",
			// "Oregano" => "Oregano",
			// "Orienta" => "Orienta",
			// "Original Surfer" => "Original Surfer",
			// "Oswald" => "Oswald",
			// "Over the Rainbow" => "Over the Rainbow",
			// "Overlock" => "Overlock",
			// "Overlock SC" => "Overlock SC",
			// "Ovo" => "Ovo",
			// "Oxygen" => "Oxygen",
			// "Oxygen Mono" => "Oxygen Mono",
			// "PT Mono" => "PT Mono",
			// "PT Sans" => "PT Sans",
			// "PT Sans Caption" => "PT Sans Caption",
			// "PT Sans Narrow" => "PT Sans Narrow",
			// "PT Serif" => "PT Serif",
			// "PT Serif Caption" => "PT Serif Caption",
			// "Pacifico" => "Pacifico",
			// "Paprika" => "Paprika",
			// "Parisienne" => "Parisienne",
			// "Passero One" => "Passero One",
			// "Passion One" => "Passion One",
			// "Patrick Hand" => "Patrick Hand",
			// "Patrick Hand SC" => "Patrick Hand SC",
			// "Patua One" => "Patua One",
			// "Paytone One" => "Paytone One",
			// "Peralta" => "Peralta",
			// "Permanent Marker" => "Permanent Marker",
			// "Petit Formal Script" => "Petit Formal Script",
			// "Petrona" => "Petrona",
			// "Philosopher" => "Philosopher",
			// "Piedra" => "Piedra",
			// "Pinyon Script" => "Pinyon Script",
			// "Pirata One" => "Pirata One",
			// "Plaster" => "Plaster",
			// "Play" => "Play",
			// "Playball" => "Playball",
			// "Playfair Display" => "Playfair Display",
			// "Playfair Display SC" => "Playfair Display SC",
			// "Podkova" => "Podkova",
			// "Poiret One" => "Poiret One",
			// "Poller One" => "Poller One",
			// "Poly" => "Poly",
			// "Pompiere" => "Pompiere",
			// "Pontano Sans" => "Pontano Sans",
			// "Port Lligat Sans" => "Port Lligat Sans",
			// "Port Lligat Slab" => "Port Lligat Slab",
			// "Prata" => "Prata",
			// "Preahvihear" => "Preahvihear",
			// "Press Start 2P" => "Press Start 2P",
			// "Princess Sofia" => "Princess Sofia",
			// "Prociono" => "Prociono",
			// "Prosto One" => "Prosto One",
			// "Puritan" => "Puritan",
			// "Purple Purse" => "Purple Purse",
			// "Quando" => "Quando",
			// "Quantico" => "Quantico",
			// "Quattrocento" => "Quattrocento",
			// "Quattrocento Sans" => "Quattrocento Sans",
			// "Questrial" => "Questrial",
			"Quicksand" => "Quicksand",
			// "Quintessential" => "Quintessential",
			// "Qwigley" => "Qwigley",
			// "Racing Sans One" => "Racing Sans One",
			// "Radley" => "Radley",
			// "Raleway" => "Raleway",
			// "Raleway Dots" => "Raleway Dots",
			// "Rambla" => "Rambla",
			// "Rammetto One" => "Rammetto One",
			// "Ranchers" => "Ranchers",
			// "Rancho" => "Rancho",
			// "Rationale" => "Rationale",
			// "Redressed" => "Redressed",
			// "Reenie Beanie" => "Reenie Beanie",
			// "Revalia" => "Revalia",
			// "Ribeye" => "Ribeye",
			// "Ribeye Marrow" => "Ribeye Marrow",
			// "Righteous" => "Righteous",
			// "Risque" => "Risque",
			// "Roboto" => "Roboto",
			// "Roboto Condensed" => "Roboto Condensed",
			// "Roboto Slab" => "Roboto Slab",
			// "Rochester" => "Rochester",
			// "Rock Salt" => "Rock Salt",
			// "Rokkitt" => "Rokkitt",
			// "Romanesco" => "Romanesco",
			// "Ropa Sans" => "Ropa Sans",
			// "Rosario" => "Rosario",
			// "Rosarivo" => "Rosarivo",
			// "Rouge Script" => "Rouge Script",
			// "Ruda" => "Ruda",
			// "Rufina" => "Rufina",
			// "Ruge Boogie" => "Ruge Boogie",
			// "Ruluko" => "Ruluko",
			// "Rum Raisin" => "Rum Raisin",
			// "Ruslan Display" => "Ruslan Display",
			// "Russo One" => "Russo One",
			// "Ruthie" => "Ruthie",
			// "Rye" => "Rye",
			// "Sacramento" => "Sacramento",
			// "Sail" => "Sail",
			// "Salsa" => "Salsa",
			// "Sanchez" => "Sanchez",
			// "Sancreek" => "Sancreek",
			// "Sansita One" => "Sansita One",
			// "Sarina" => "Sarina",
			// "Satisfy" => "Satisfy",
			// "Scada" => "Scada",
			// "Schoolbell" => "Schoolbell",
			// "Seaweed Script" => "Seaweed Script",
			// "Sevillana" => "Sevillana",
			// "Seymour One" => "Seymour One",
			// "Shadows Into Light" => "Shadows Into Light",
			// "Shadows Into Light Two" => "Shadows Into Light Two",
			// "Shanti" => "Shanti",
			// "Share" => "Share",
			// "Share Tech" => "Share Tech",
			// "Share Tech Mono" => "Share Tech Mono",
			// "Shojumaru" => "Shojumaru",
			// "Short Stack" => "Short Stack",
			// "Siemreap" => "Siemreap",
			// "Sigmar One" => "Sigmar One",
			// "Signika" => "Signika",
			// "Signika Negative" => "Signika Negative",
			// "Simonetta" => "Simonetta",
			// "Sintony" => "Sintony",
			// "Sirin Stencil" => "Sirin Stencil",
			// "Six Caps" => "Six Caps",
			// "Skranji" => "Skranji",
			// "Slackey" => "Slackey",
			// "Smokum" => "Smokum",
			// "Smythe" => "Smythe",
			// "Sniglet" => "Sniglet",
			// "Snippet" => "Snippet",
			// "Snowburst One" => "Snowburst One",
			// "Sofadi One" => "Sofadi One",
			// "Sofia" => "Sofia",
			// "Sonsie One" => "Sonsie One",
			// "Sorts Mill Goudy" => "Sorts Mill Goudy",
			// "Source Code Pro" => "Source Code Pro",
			// "Source Sans Pro" => "Source Sans Pro",
			// "Special Elite" => "Special Elite",
			// "Spicy Rice" => "Spicy Rice",
			// "Spinnaker" => "Spinnaker",
			// "Spirax" => "Spirax",
			// "Squada One" => "Squada One",
			// "Stalemate" => "Stalemate",
			// "Stalinist One" => "Stalinist One",
			// "Stardos Stencil" => "Stardos Stencil",
			// "Stint Ultra Condensed" => "Stint Ultra Condensed",
			// "Stint Ultra Expanded" => "Stint Ultra Expanded",
			// "Stoke" => "Stoke",
			// "Strait" => "Strait",
			// "Sue Ellen Francisco" => "Sue Ellen Francisco",
			// "Sunshiney" => "Sunshiney",
			// "Supermercado One" => "Supermercado One",
			// "Suwannaphum" => "Suwannaphum",
			// "Swanky and Moo Moo" => "Swanky and Moo Moo",
			// "Syncopate" => "Syncopate",
			// "Tangerine" => "Tangerine",
			// "Taprom" => "Taprom",
			// "Tauri" => "Tauri",
			// "Telex" => "Telex",
			// "Tenor Sans" => "Tenor Sans",
			// "Text Me One" => "Text Me One",
			// "The Girl Next Door" => "The Girl Next Door",
			// "Tienne" => "Tienne",
			// "Tinos" => "Tinos",
			// "Titan One" => "Titan One",
			// "Titillium Web" => "Titillium Web",
			// "Trade Winds" => "Trade Winds",
			// "Trocchi" => "Trocchi",
			// "Trochut" => "Trochut",
			// "Trykker" => "Trykker",
			// "Tulpen One" => "Tulpen One",
			// "Ubuntu" => "Ubuntu",
			// "Ubuntu Condensed" => "Ubuntu Condensed",
			// "Ubuntu Mono" => "Ubuntu Mono",
			// "Ultra" => "Ultra",
			// "Uncial Antiqua" => "Uncial Antiqua",
			// "Underdog" => "Underdog",
			// "Unica One" => "Unica One",
			// "UnifrakturCook" => "UnifrakturCook",
			// "UnifrakturMaguntia" => "UnifrakturMaguntia",
			// "Unkempt" => "Unkempt",
			// "Unlock" => "Unlock",
			// "Unna" => "Unna",
			// "VT323" => "VT323",
			// "Vampiro One" => "Vampiro One",
			// "Varela" => "Varela",
			// "Varela Round" => "Varela Round",
			// "Vast Shadow" => "Vast Shadow",
			// "Vibur" => "Vibur",
			// "Vidaloka" => "Vidaloka",
			// "Viga" => "Viga",
			// "Voces" => "Voces",
			// "Volkhov" => "Volkhov",
			// "Vollkorn" => "Vollkorn",
			// "Voltaire" => "Voltaire",
			// "Waiting for the Sunrise" => "Waiting for the Sunrise",
			// "Wallpoet" => "Wallpoet",
			// "Walter Turncoat" => "Walter Turncoat",
			// "Warnes" => "Warnes",
			// "Wellfleet" => "Wellfleet",
			// "Wendy One" => "Wendy One",
			// "Wire One" => "Wire One",
			// "Yanone Kaffeesatz" => "Yanone Kaffeesatz",
			// "Yellowtail" => "Yellowtail",
			// "Yeseva One" => "Yeseva One",
			// "Yesteryear" => "Yesteryear",
			// "Zeyada" => "Zeyada"
			);
/*-----------------------------------------------------------------------------------*/
/* The Options Array */
/*-----------------------------------------------------------------------------------*/
// Set the Options Array
global $of_options;
$of_options = array();
#=========================================#
# GENERAL SETTINGS #
#=========================================#
$of_options[] = array("name" => "General",
	"type" => "heading"
	);
$of_options[] = array("name" => "Hello there!",
	"desc" => "",
	"id" => "hello",
	"std" => "<h3 style=\"margin: 0 0 10px;\">Welcome to the LiveTo110 Options.</h3>",
	"icon" => true,
	"type" => "info"
	);
$of_options[] = array("name" => "Custom Favicon ICO",
	"desc" => "Upload a 16px x 16px ico image that will represent your website's favicon.",
	"id" => "custom_favicon_ie",
	"std" => get_template_directory_uri() . "/img/favicon/favicon.ico",
	"type" => "upload"
	);
$of_options[] = array("name" => "Custom Favicon PNG",
	"desc" => "Upload a 16px x 16px PNG/GIF image that will represent your website's favicon.",
	"id" => "custom_favicon_mod",
	"std" => get_template_directory_uri() . "/img/favicon/16x16.png",
	"type" => "upload"
	);
$of_options[] = array("name" => "Iphone Favicon",
	"desc" => "Upload a 57px x 57px PNG/GIF image that will represent your website's favicon on Iphone.",
	"id" => "custom_favicon_iphone",
	"std" => get_template_directory_uri() . "/img/favicon/apple-touch-icon-57x57-precomposed.png",
	"type" => "upload"
	);
$of_options[] = array("name" => "Ipad Favicon",
	"desc" => "Upload a 72px x 72px PNG/GIF image that will represent your website's favicon on Ipad.",
	"id" => "custom_favicon_ipad",
	"std" => get_template_directory_uri() . "/img/favicon/apple-touch-icon-72x72-precomposed.png",
	"type" => "upload"
	);
$of_options[] = array("name" => "Retina Favicon",
	"desc" => "Upload a 114px x 114px PNG/GIF image that will represent your website's favicon on retina display.",
	"id" => "custom_favicon_retina",
	"std" => get_template_directory_uri() . "/img/favicon/apple-touch-icon-114x114-precomposed.png",
	"type" => "upload"
	);
$of_options[] = array("name" => "Retina Favicon",
	"desc" => "Upload a 144px x 144px PNG/GIF image that will represent your website's favicon on retina display.",
	"id" => "custom_favicon_retina",
	"std" => get_template_directory_uri() . "/img/favicon/apple-touch-icon-144x144-precomposed.png",
	"type" => "upload"
	);

$of_options[] = array("name" => "Tracking Code",
	"desc" => "Paste your Google Analytics (or other) tracking code here. This will be added into the footer template of your theme.",
	"id" => "google_analytics",
	"std" => "",
	"type" => "textarea"
	);
$of_options[] = array("name" => "SEO",
	"desc" => "",
	"id" => "introduction",
	"std" => "<h3 style=\"margin: 0 0 0px;\">SEO.</h3>Paste your site keywords, description & title for SEO optimization. 250 symbols recommended!",
	"icon" => true,
	"type" => "info"
	);
$of_options[] = array("name" => "Site Title",
	"desc" => "",
	"id" => "site_title",
	"std" => "Live To 110",
	"type" => "text"
	);
$of_options[] = array("name" => "Keywords",
	"desc" => "Insert your keywords comma seperated. Ex: Parallax, Responsive, HTML5, CSS3.",
	"id" => "site_keywords",
	"std" => "Parallax, Responsive, HTML5, CSS3",
	"type" => "textarea"
	);
$of_options[] = array("name" => "Description",
	"desc" => "Insert your keywords comma seperated. Ex: Responsive parallax HTML5 & CSS3 WordPress premium theme.",
	"id" => "site_desc",
	"std" => "Survive & Thrive",
	"type" => "textarea"
	);

#=========================================#
# HEADER SETTINGS #
#=========================================#
$of_options[] = array("name" => "Header",
	"type" => "heading"
	);
$of_options[] = array("name" => "Logo",
	"desc" => "Upload a Logo PNG/GIF image that will represent your website.",
	"id" => "logo",
	"std" => get_template_directory_uri() . "/img/site-logo.png",
	"type" => "upload"
	);
$of_options[] = array("name" => "Retina Logo",
	"desc" => "Upload a big Logo PNG/GIF image that will represent your website on retina display.",
	"id" => "logo_retina",
	"std" => get_template_directory_uri() . "/img/retina_logo.png",
	"type" => "upload"
	);
$of_options[] = array("name" => "Retina Logo Width",
	"desc" => "Retina logo width should be the same as real logo width. Don't use 'px'",
	"id" => "logo_retina_w",
	"std" => "213",
	"type" => "text"
	);
$of_options[] = array("name" => "Retina Logo Height",
	"desc" => "Retina logo height should be the same as real logo height. Don't use 'px'",
	"id" => "logo_retina_h",
	"std" => "29",
	"type" => "text"
	);


#=========================================#
# HOMEPAGE SETTINGS #
#=========================================#
$of_options[] = array("name" => "Home",
	"type" => "heading"
	);
$of_options[] = array("name" => "Homepage Layout Builder",
	"desc" => "Organize how you want to see your Homepage!",
	"id" => "homepage_blocks",
	"std" => $of_options_homepage_blocks,
	"type" => "sorter"
	);
$of_options[] = array("name" => "Enter Slider Alias",
	"desc" => "",
	"id" => "hp_slider_id",
	"fold" => "hp_slider",
	"std" => "HomePageSlider",
	"type" => "text"
	);


#=========================================#
# ABOUT LIVETO110 SETTINGS #
#=========================================#
$of_options[] = array("name" => "About LiveTo110",
	"type" => "heading"
	);
$of_options[] = array("name" => "Section Title",
	"desc" => "",
	"id" => "aboutliveto110_title",
	"std" => "About Live To 110",
	"type" => "text"
	);
$of_options[] = array("name" => "Section SubTitle",
	"desc" => "",
	"id" => "aboutliveto110_subtitle",
	"std" => "Wendy is dedicated to helping you live a long, healthy life. <span>Let's Get Started!</span>",
	"type" => "text"
	);


#=========================================#
# SPECIAL OFFERS SETTINGS #
#=========================================#
$of_options[] = array("name" => "Special Offers",
	"type" => "heading"
	);
$of_options[] = array("name" => "Section Title",
	"desc" => "",
	"id" => "specialoffers_title",
	"std" => "Special Offers",
	"type" => "text"
	);
$of_options[] = array("name" => "Number of Items",
	"desc" => "Total number of offers to show",
	"id" => "specialoffers_totalcount",
	"std" => "2",
	"min" => "2",
	"step" => "2",
	"max" => "6",
	"type" => "sliderui"
	);

#=========================================#
# RECENT POSTS settings  #
#=========================================#
$of_options[] = array("name" => "Recent Posts",
	"type" => "heading"
	);
$of_options[] = array("name" => "Section Title",
	"desc" => "",
	"id" => "recentposts_title",
	"std" => "Recent Posts",
	"type" => "text"
	);

#=========================================#
# SIGNUP SECTION SETTINGS #
#=========================================#
$of_options[] = array("name" => "Signup Section",
	"type" => "heading"
	);
$of_options[] = array("name" => "Section Title",
	"desc" => "",
	"id" => "signupsection_title",
	"std" => "Join The Live To 110 Community",
	"type" => "text"
	);
$of_options[] = array("name" => "Section Sub-Title",
	"desc" => "",
	"id" => "signupsection_subtitle",
	"std" => "Sign up to receive email updates and these 3 free gifts",
	"type" => "text"
	);
$of_options[] = array("name" => "Section BG Image",
	"desc" => "",
	"id" => "signupsection_bg_img",
	"std" => get_template_directory_uri() . "/img/purple-cabbage.jpg",
	"type" => "upload"
	);
$of_options[] = array("name" => "Section Graphics",
	"desc" => "",
	"id" => "signupsection_graphics",
	"std" => get_template_directory_uri() . "/img/books.png",
	"type" => "upload"
	);
$of_options[] = array("name" => "Button Text",
	"desc" => "",
	"id" => "signupsection_btn_text",
	"std" => "Start Changing Your Life Today",
	"type" => "text"
	);
$of_options[] = array("name" => "Button Link-To URL",
	"desc" => "",
	"id" => "signupsection_btn_linkto_url",
	"std" => "",
	"type" => "text"
	);

#=========================================#
# CONTACT US SETTINGS #
#=========================================#
$of_options[] = array("name" => "Contact Us",
	"type" => "heading"
	);
$of_options[] = array("name" => "Intro section textblock",
	"desc" => "",
	"id" => "contact_switch_int",
	"fold" => "contact_switch",
	"folds" => 1,
	"std" => 1,
	"type" => "switch"
	);
$of_options[] = array("name" => "Section Intro H1",
	"desc" => "Text for intro first line.",
	"id" => "contact_intro_h1",
	"fold" => "contact_switch_int",
	"std" => "Feedback is important",
	"type" => "text"
	);
$of_options[] = array("name" => "Section Intro H2",
	"desc" => "Text for intro second line.",
	"id" => "contact_intro_h2",
	"fold" => "contact_switch_int",
	"std" => "We always answer all questions",
	"type" => "text"
	);
$of_options[] = array("name" => "Section Title",
	"desc" => "",
	"id" => "contact_title",
	"std" => "Contact us",
	"type" => "text"
	);
$of_options[] = array("name" => "Section SubTitle",
	"desc" => "",
	"id" => "contact_subtitle",
	"std" => "Read interesting posts on our blog",
	"type" => "text"
	);
$of_options[] = array("name" => "Display Google Map",
	"desc" => "You can show your location.",
	"id" => "google_map",
	"std" => 1,
	"type" => "switch"
	);
$of_options[] = array("name" => "Your Address",
	"desc" => "",
	"id" => "contact_gmap",
	"std" => "New York",
	"fold" => "google_map",
	"type" => "text"
	);
$of_options[] = array("name" => "Zoom Level",
	"desc" => "",
	"id" => "contact_gmap_zoom",
	"std" => "New York",
	"fold" => "google_map",
	"std" => "17",
	"min" => "1",
	"step" => "1",
	"max" => "20",
	"type" => "sliderui"
	);
$of_options[] = array("name" => "",
	"desc" => "You can switch map type: ON - Static, OFF - dynamic",
	"id" => "contact_map_type",
	"std" => 1,
	"fold" => "google_map",
	"type" => "switch"
	);
$of_options[] = array("name" => "Display Contact Form/Details",
	"desc" => "You can show/hide your details and contact form.",
	"id" => "contact_form_det",
	"std" => 1,
	"folds" => 1,
	"type" => "switch"
	);
$of_options[] = array("name" => "Contact form title",
	"desc" => "",
	"id" => "cf_title",
	"std" => "Contact form",
	"fold" => "contact_form_det",
	"type" => "text"
	);
$of_options[] = array("name" => "Details title",
	"desc" => "",
	"id" => "det_title",
	"std" => "More Info",
	"fold" => "contact_form_det",
	"type" => "text"
	);
$of_options[] = array("name" => "Contact details",
	"desc" => "Phone",
	"id" => "contact_info_phone",
	"fold" => "contact_form_det",
	"std" => "(123) 555-5555",
	"type" => "text"
	);
$of_options[] = array("name" => "",
	"desc" => "Email",
	"id" => "contact_info_email",
	"fold" => "contact_form_det",
	"std" => "info@domain.com",
	"type" => "text"
	);
$of_options[] = array("name" => "",
	"desc" => "Skype",
	"id" => "contact_info_skype",
	"fold" => "contact_form_det",
	"std" => "skype.username",
	"type" => "text"
	);
$of_options[] = array("name" => "",
	"desc" => "Address",
	"id" => "contact_info_addr",
	"fold" => "contact_form_det",
	"std" => "Salt Lake City, UT 87234",
	"type" => "text"
	);
$of_options[] = array("name" => "Contact Form 7 Shortcode",
	"desc" => "Shortcode of your contact form",
	"id" => "email",
	"std" => "",
	"fold" => "contact_form_det",
	"type" => "textarea"
	);
	  // $of_options[] = array("name" => "Unique colors",
		// "desc" => "",
		// "id" => "contact_colors",
		// "std" => "0",
		// "folds" => "1",
		// "type" => "switch"
	  // );


#=========================================#
# SOCIAL LINKS SETTINGS #
#=========================================#
$of_options[] = array("name" => "Social Links",
	"type" => "heading"
	);
$of_options[] = array("name" => "Twitter",
	"desc" => "Your Twitter profile link.",
	"id" => "sociallinks_twitter",
	"std" => "http://twitter.com/IwillLiveto110",
	"type" => "text"
	);
$of_options[] = array("name" => "Facebook",
	"desc" => "Your Facebook profile link.",
	"id" => "sociallinks_facebook",
	"std" => "https://www.facebook.com/IwillLiveTo110",
	"type" => "text"
	);
$of_options[] = array("name" => "YouTube",
	"desc" => "Your YouTube profile link.",
	"id" => "sociallinks_youtube",
	"std" => "http://www.youtube.com/user/WendyLiveto110",
	"type" => "text"
	);
$of_options[] = array("name" => "Google Plus",
	"desc" => "Your Google Plus profile link.",
	"id" => "sociallinks_google",
	"std" => "https://plus.google.com/+wendymyers",
	"type" => "text"
	);
$of_options[] = array("name" => "RSS",
	"desc" => "Your RSS url.",
	"id" => "sociallinks_rss",
	"std" => get_site_url() . "/feed/",
	"type" => "text"
	);
$of_options[] = array("name" => "Instagram",
	"desc" => "Your Instagram url.",
	"id" => "sociallinks_instagram",
	"std" => "http://www.instagram.com/liveto110",
	"type" => "text"
	);
$of_options[] = array("name" => "Pinterest",
	"desc" => "Your Pinterest url.",
	"id" => "sociallinks_pinterest",
	"std" => "http://pinterest.com/liveto110/",
	"type" => "text"
	);


#=========================================#
# FOOTER SETTINGS #
#=========================================#
$of_options[] = array("name" => "Footer",
	"type" => "heading"
	);
$of_options[] = array("name" => "Footer Logo",
	"desc" => "Upload a Logo PNG/GIF image that will represent your website's footer.",
	"id" => "footer_logo",
	"std" => get_template_directory_uri() . "/img/footer-site-logo.png",
	"type" => "upload"
	);
$of_options[] = array("name" => "Copyright Info",
	"desc" => "Info text. Eg. ©2014",
	"id" => "footer_copyright",
	"std" => "&copy; 2014 Live to 110, LLC. All Rights Reserved",
	"type" => "textarea"
	);
$of_options[] = array("name" => "Designed by",
	"desc" => "Text for footer copyright section.",
	"id" => "footer_theme",
	"std" => "Designed by <a href='#' rel='designer'>TheBrandingHospital.com</a>",
	"type" => "textarea"
	);
$of_options[] = array("name" => "Colors",
	"desc" => "Background color",
	"id" => "footer_bg",
	"std" => "#eef6eb",
	"type" => "color"
	);
$of_options[] = array("name" => "",
	"desc" => "Text Color",
	"id" => "footer_color",
	"std" => "#487936",
	"type" => "color"
	);
#=========================================#
# BLOG #
#=========================================#
$of_options[] = array("name" => "Blog",
	"type" => "heading"
	);
$of_options[] = array("name" => "Blog Title",
	"desc" => "This blog page's title.",
	"id" => "blog_title",
	"std" => "Blog",
	"type" => "text"
	);
$of_options[] = array("name" => "Blog Subtitle",
	"desc" => "The blog page's subtitle",
	"id" => "blog_subtitle",
	"std" => "",
	"type" => "text"
	);

#=========================================#
# TYPOGRAPHY & STYLING SETTINGS #
#=========================================#
$of_options[] = array("name" => "Fonts and Styles",
	"type" => "heading"
	);
// BODY FONT
$of_options[] = array("name" => "Body Font",
	"desc" => "The base font to be used across the website.",
	"id" => "google_body_font",
	"std" => "Lato",
	"type" => "select_google_font",
	"preview" => array(
		    "text" => "The Quick Brown Fox Jumps Over The Lazy Dog!", //this is the text from preview box
		    "size" => "20px" //this is the text size from preview box
		    ),
	"options" => $google_fonts
	);
// HEADINGS FONT
$of_options[] = array("name" => "Headings Font",
	"desc" => "The font to use for headings and titles.",
	"id" => "google_headings_font",
	"std" => "Quicksand",
	"type" => "select_google_font",
	"preview" => array(
		    "text" => "THE QUICK BROWN FOX JUMPS OVER THE LAZY DOG!", //this is the text from preview box
		    "size" => "26px" //this is the text size from preview box
		    ),
	"options" => $google_fonts
	);
// FONT SIZE
$of_options[] = array("name" => "Body Font Size",
	"desc" => "Body font in px, max:24, min:12, default:14.",
	"id" => "font_size_body",
	"std" => "14",
	"min" => "12",
	"step" => "1",
	"max" => "24",
	"type" => "sliderui"
	);


#=========================================#
# Language settings  #
#=========================================#
if(function_exists('icl_get_languages') && !class_exists('WPML_String_Translation')){
	$of_options[] = array("name" => "Languages",
		"type" => "heading"
		);

	$languages = icl_get_languages('skip_missing=1');
		//var_dump($languages);
	function field_template($id, $desc="", $std="", $name="", $type="text"){
		return array("id"=>$id,"desc"=>$desc, "std"=>$std, "name"=>$name, "type"=>$type);
	}
	foreach($languages as $languaqe){
		$of_options[] = array('id'=> $languaqe['language_code'], 'type'=>'menu', 'std' => $languaqe['native_name']);
	}
	foreach($languages as $languaqe){

		$of_options[] = array('type'=>'menu_item', 'id'=> $languaqe['language_code']);
		$of_options[] = array("name" => "Hello there!",
			"desc" => "",
			"id" => "lang_hello",
			"std" => "<h3 style=\"margin: 0 0 10px;\">Enter the translation for ".$languaqe['native_name']." language</h3>",
			"icon" => true,
			"type" => "info"
			);
		$of_options[] = field_template("home_menu_name_".$languaqe['language_code'],__("Text to present section in menu","liveto110"),"Home","Home");

		$of_options[] = field_template("serv_menu_name_".$languaqe['language_code'],__("Text to present section in menu","liveto110"),"Services","Services");
		$of_options[] = field_template("serv_intro_h1_".$languaqe['language_code'],__("Text for services intro first line.","liveto110"),"We are proud of our service");
		$of_options[] = field_template("serv_intro_h2_".$languaqe['language_code'],__("Text for services intro second line.","liveto110"),"Our service is very professional and popular");
		$of_options[] = field_template("serv_title_".$languaqe['language_code'],__("Section Title","liveto110"),"Services we provide");
		$of_options[] = field_template("serv_subtitle_".$languaqe['language_code'],__("Section SubTitle","liveto110"),"A smart WordPress design team has 7 years experience");

		$of_options[] = field_template("port_menu_name_".$languaqe['language_code'],__("Text to present section in menu","liveto110"),"Portfolio","Portfolio");
		$of_options[] = field_template("port_intro_h1_".$languaqe['language_code'],__("Text for portfolio intro first line.","liveto110"),"Original portfolio");
		$of_options[] = field_template("port_intro_h2_".$languaqe['language_code'],__("Text for portfolio intro second line.","liveto110"),"Preview of work, social buttons");
		$of_options[] = field_template("port_title_".$languaqe['language_code'],__("Section Title","liveto110"),"Portfolio");
		$of_options[] = field_template("port_subtitle_".$languaqe['language_code'],__("Section SubTitle","liveto110"),"Premium portfolio slider");

		$of_options[] = field_template("price_menu_name_".$languaqe['language_code'],__("Text to present section in menu","liveto110"),"Pricing","Pricing table");
		$of_options[] = field_template("price_intro_h1_".$languaqe['language_code'],__("Text for pricing table intro first line.","liveto110"),"Pricing table");
		$of_options[] = field_template("price_intro_h2_".$languaqe['language_code'],__("Text for pricing table intro second line.","liveto110"),"beautiful original table");
		$of_options[] = field_template("price_title_".$languaqe['language_code'],__("Section Title","liveto110"),"Our Price");
		$of_options[] = field_template("price_subtitle_".$languaqe['language_code'],__("Section SubTitle","liveto110"),"Satisfaction Guaranteed Or Your Money Back!");
		$of_options[] = field_template("price_client_title_".$languaqe['language_code'],__("Happy Client Title","liveto110"),"Our Customers");
		$of_options[] = field_template("price_client_subtitle_".$languaqe['language_code'],__("Happy Client Subtitle","liveto110"),"A smart WordPress design team has 7 years experience");

		$of_options[] = field_template("about_menu_name_".$languaqe['language_code'],__("Text to present section in menu","liveto110"),"About","About");
		$of_options[] = field_template("about_intro_h1_".$languaqe['language_code'],__("Text for about us intro first line.","liveto110"),"Meet the Team");
		$of_options[] = field_template("about_intro_h2_".$languaqe['language_code'],__("Text for about us intro second line.","liveto110"),"Reliable and professional team");
		$of_options[] = field_template("about_title_".$languaqe['language_code'],__("Section Title","liveto110"),"About us");
		$of_options[] = field_template("about_subtitle_".$languaqe['language_code'],__("Section SubTitle","liveto110"),"Professionally work and prosper");

		$of_options[] = field_template("contact_menu_name_".$languaqe['language_code'],__("Text to present section in menu","liveto110"),"Contact","Contact");
		$of_options[] = field_template("contact_intro_h1_".$languaqe['language_code'],__("Text for contact us intro first line.","liveto110"),"Feedback is important");
		$of_options[] = field_template("contact_intro_h2_".$languaqe['language_code'],__("Text for contact us second line.","liveto110"),"We always answer all questions");
		$of_options[] = field_template("contact_title_".$languaqe['language_code'],__("Section Title","liveto110"),"Contact us");
		$of_options[] = field_template("contact_subtitle_".$languaqe['language_code'],__("Section SubTitle","liveto110"),"Read interesting posts on our blog");
		$of_options[] = field_template("cf_title_".$languaqe['language_code'],__("Contact form title","liveto110"),"Mail US");
		$of_options[] = field_template("det_title_".$languaqe['language_code'],__("Details title","liveto110"),"More Info");

		$of_options[] = field_template("widget_intro_h1_".$languaqe['language_code'],__("Text for footer intro first line.","liveto110"),"Feedback is important","Footer");
		$of_options[] = field_template("widget_title_".$languaqe['language_code'],__("Section Title","liveto110"),"widgets");
		$of_options[] = field_template("widget_subtitle_".$languaqe['language_code'],__("Section SubTitle","liveto110"),"Read interesting posts on our blog");

		$of_options[] = field_template("blog_title_".$languaqe['language_code'],__("Text to present section in menu","liveto110"),"Blog","Blog");
		$of_options[] = field_template("blog_subtitle_".$languaqe['language_code'],__("Blog tag line","liveto110"),"A smart WordPress design team has 7 years experience");

		$of_options[] = field_template("blank1_menu_name_".$languaqe['language_code'],__("Text to present section in menu","liveto110"),"Blank1","Blank1");
		$of_options[] = field_template("blank1_intro_h1_".$languaqe['language_code'],__("Text for portfolio intro first line.","liveto110"),"Original portfolio");
		$of_options[] = field_template("blank1_intro_h2_".$languaqe['language_code'],__("Text for portfolio intro second line.","liveto110"),"Preview of work, social buttons");
		$of_options[] = field_template("blank1_title_".$languaqe['language_code'],__("Section Title","liveto110"),"Portfolio");
		$of_options[] = field_template("blank1_subtitle_".$languaqe['language_code'],__("Section SubTitle","liveto110"),"Premium portfolio slider");

		$of_options[] = field_template("blank2_menu_name_".$languaqe['language_code'],__("Text to present section in menu","liveto110"),"Blank2","Blank2");
		$of_options[] = field_template("blank2_intro_h1_".$languaqe['language_code'],__("Text for portfolio intro first line.","liveto110"),"Original portfolio");
		$of_options[] = field_template("blank2_intro_h2_".$languaqe['language_code'],__("Text for portfolio intro second line.","liveto110"),"Preview of work, social buttons");
		$of_options[] = field_template("blank2_title_".$languaqe['language_code'],__("Section Title","liveto110"),"Portfolio");
		$of_options[] = field_template("blank2_subtitle_".$languaqe['language_code'],__("Section SubTitle","liveto110"),"Premium portfolio slider");

		$of_options[] = field_template("blank3_menu_name_".$languaqe['language_code'],__("Text to present section in menu","liveto110"),"Blank3","Blank3");
		$of_options[] = field_template("blank3_intro_h1_".$languaqe['language_code'],__("Text for portfolio intro first line.","liveto110"),"Original portfolio");
		$of_options[] = field_template("blank3_intro_h2_".$languaqe['language_code'],__("Text for portfolio intro second line.","liveto110"),"Preview of work, social buttons");
		$of_options[] = field_template("blank3_title_".$languaqe['language_code'],__("Section Title","liveto110"),"Portfolio");
		$of_options[] = field_template("blank3_subtitle_".$languaqe['language_code'],__("Section SubTitle","liveto110"),"Premium portfolio slider");

		$of_options[] = field_template("recent_menu_name_".$languaqe['language_code'],__("Text to present section in menu","liveto110"),"Recent","Recent posts");
		$of_options[] = field_template("recent_intro_h1_".$languaqe['language_code'],__("Text for recent posts intro first line.","liveto110"),"Better recent posts");
		$of_options[] = field_template("recent_intro_h2_".$languaqe['language_code'],__("Text for recent posts intro second line.","liveto110"),"Preview of latest posts");
		$of_options[] = field_template("recent_title_".$languaqe['language_code'],__("Section Title","liveto110"),"Recent posts");
		$of_options[] = field_template("recent_subtitle_".$languaqe['language_code'],__("Section SubTitle","liveto110"),"your latest posts");

	}
}
#=========================================#
# CUSTOM CSS #
#=========================================#  
$of_options[] = array("name" => "Custom CSS",
	"type" => "heading"
	);
$of_options[] = array("name" => "Luigi Styles",
	"desc" => "These styles will get loaded after the main stylesheet.",
	"id" => "customcss_luigi",
	"std" => "",
	"type" => "textarea"
	); 
#=========================================#
# BACKUP OPTIONS #
#=========================================#
$of_options[] = array("name" => "Backup Options",
	"type" => "heading"
	);
$of_options[] = array("name" => "Backup and Restore Options",
	"id" => "of_backup",
	"std" => "",
	"type" => "backup",
	"desc" => 'You can use the two buttons below to backup your current options, and then restore it back at a later time. This is useful if you want to experiment on the options but would like to keep the old settings in case you need it back.',
	);
$of_options[] = array("name" => "Transfer Theme Options Data",
	"id" => "of_transfer",
	"std" => "",
	"type" => "transfer",
	"desc" => 'You can tranfer the saved options data between different installs by copying the text inside the text box. To import data from another install, replace the data in the text box with the one from another install and click "Import Options".',
	);
}
//End function: of_options()
}//End chack if function exists: of_options()
?>