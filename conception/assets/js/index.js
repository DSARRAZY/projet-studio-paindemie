// dans ce fichier js "point d'entrée"

// on peut aller chercher des dépendances de node_modules
import 'reset-css';

// parfois, il faut spécifier un chemin pour aller chercher le bon fichier à l'intérieur du module
import '@fortawesome/fontawesome-free/css/all.min.css';

// on importe notre style custom (SCSS)
import '../scss/main.scss';
import './menu.js';

//on importe bootsrap
import 'bootstrap';
