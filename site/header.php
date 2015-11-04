<header>
    <img src="img/logo.png" alt="">
<style>
        /* CSS rudimentaire pour cet exemple de GMA */    
    
        /* liste du menu principal */
        .nav-menu {
            display: block;
            position: relative;
            list-style: none;
            margin: 0;
            padding: 0;
            z-index: 15;
        }
        
        /* item de navigation de premier niveau du GMA */
        .nav-item {
            list-style: none;
            display: inline-block;
            padding: 0;
            margin: 0;
        }
        
        /* premier lien descendant dans un li du menu principal */
        .nav-item > a {
            position: relative;
            display: inline-block;
            padding: 0.5em 1em;
            margin: 0 0 -1px 0;
            border: 1px solid transparent;
        }
        
        /* états focus/open premier lien descendant dans un li du menu principal */
        .nav-item > a:focus,
        .nav-item > a.open {
            border: 1px solid #dedede;
        }
        
        /* états open du premier lien descendant dans un li du menu principal  */
        .nav-item > a.open {
            background-color: #fff;
            border-bottom: none;
            z-index: 1;
        }
        
        /* panneau de sous-menu */
        .sub-nav {
            position: absolute;
            display: none;
            top: 2.6em;
            margin-top: -1px;
            padding: 0.5em 1em;
            border: 1px solid #dedede;
            background-color: #fff;
        }
        
        /* état open du panneau de sous-menu */
        .sub-nav.open {
            display: block;
        }
        
        /* liste d‘items dans le panneau de sous-menu */
        .sub-nav ul {
            display: inline-block;
            vertical-align: top;
            margin: 0 1em 0 0;
            padding: 0;
        }
        
        /* item li dans le panneau de sous-menu */
        .sub-nav li {
            display: block;
            list-style-type: none;
            margin: 0;
            padding: 0;
        }     
    </style>
    <nav>
        <ul class="nav-menu">
        	<li class="nav-item">
                <a href="?home">Accueil</a>
            </li>
            <li class="nav-item">
                <a href="?angency">L'Agence</a>
                <div class="sub-nav">
                    <ul class="sub-nav-group">
                        <li><a href="?agency&team=0">Dev</a></li>
                        <li><a href="?agency&team=1">Graphistes</a></li>
                        <li><a href="?agency&team=2">Com</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a href="?products">Nos produits</a>
                <div class="sub-nav">
                    <ul class="sub-nav-group">
                        <li><a href="?products&type=0">Sites vitrines</a></li>
                        <li><a href="?products&type=1">E-Commerce</a></li>
                        <li><a href="?products&type=2">Blogs</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a href="?contact">contact</a>
            </li>
        </ul>
    </nav>

    <!-- inclusion de jquery -->
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>

    <!-- inclusion du script plugin jquery-accessibleMegaMenu -->
    <script src="js/jquery-accessibleMegaMenu.js"></script>
    
    <!-- initialise un sélecteur comme un menu GMA -->
    <script>
        $("nav:first").accessibleMegaMenu({
            /* préfixe pour les attributs d‘un ID unique, qui sont requis
               pour indiquer l‘appartenance à aria-owns, aria-controls et aria-labelledby */
            uuidPrefix: "menu_accessible",

            /* Classe CSS pour définir le style du GMA */
            menuClass: "nav-menu",

            /* Classe CSS pour un item de navigation de premier niveau */
            topNavItemClass: "nav-item",

            /* Classe CSS pour un panneau de sous-menu */
            panelClass: "sub-nav",

            /* Classe CSS pour un groupe d‘items dans un sous-menu */
            panelGroupClass: "sub-nav-group",

            /* Classe CSS pour la propriété hover */
            hoverClass: "hover",

            /* Classe CSS pour la propriété focus */
            focusClass: "focus",

            /* Classe CSS pour la propriété open */
            openClass: "open"
        });
    </script>
</header>
