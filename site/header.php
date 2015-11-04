<header>
    <div id="access-nav">
        <ul>
            <li><a id="gotoMenu" tabindex="1" href="#mainNav">Aller au menu</a></li>
            <li><a id="gotoContent" tabindex="2" href="#mainContent">Aller au contenu</a></li>
            <li><a id="gotoFooter" tabindex="3" href="#mainFooter">Aller au footer</a></li>
        </ul>
    </div>

    <script type="text/javascript">
        $("#gotoMenu").click(function(){
            $("#mainNav .nav-item:first-child a:first-child").focus();
            return false;
        });
        $("#gotoContent*").click(function(){
            $("#mainContent section:first-child article:first-child a:first-child").focus();
            return false;
        });
        $("#gotoFooter").click(function(){
            $("footer div:first-child li:first-child a:first-child").focus();
            return false;
        });
    </script>


    <img src="img/logo.png" alt="logo de l'agence">
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
    <nav id="mainNav">
        <ul class="nav-menu">
        	<li class="nav-item">
                <a href="index.php" title="Aller à l'accueil">Accueil</a>
            </li>
            <li class="nav-item">
                <a href="?angency" title="Découvre notre agence">L'Agence</a>
                <div class="sub-nav">
                    <ul class="sub-nav-group">
                        <li><a href="?agency&team=0" title="Notre équipe de développeurs">Dev</a></li>
                        <li><a href="?agency&team=1" title="découvrez nos graphiqte">Graphistes</a></li>
                        <li><a href="?agency&team=2" title="rencontrez notre équipe de communication">Com</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a href="?products" title="nos produits">Nos produits</a>
                <div class="sub-nav">
                    <ul class="sub-nav-group">
                        <li><a href="?products&type=0" title="Sites vitrines">Sites vitrines</a></li>
                        <li><a href="?products&type=1" title="E-commerces">E-Commerces</a></li>
                        <li><a href="?products&type=2" title="blogs">Blogs</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a href="contact.php" title="contactez nous">Contact</a>
            </li>
        </ul>
    </nav>

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
