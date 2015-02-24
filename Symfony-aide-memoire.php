<!-- ROUTER -->
<?php
	
	/* Router avancée
	oc_platform_view_slug:
	
	    path:      /platform/{year}/{slug}.{format}
	
	    defaults:  { _controller: OCPlatformBundle:Advert:viewSlug }
	
	    requirements:
	
	        year:   \d{4}
	
	        format: html|xml
	*/
	
	<?php
	// 	Générer les URL=> http:monsite/platform
	
	
	//{# Dans une vue Twig, en considérant bien sûr que la variable advert_id est disponible #}
	?>
	<a href="{{ path('oc_platform_view', { 'id': advert_id }) }}"><!-- Depuis une vue Twig -->
	    Lien vers l'annonce d'id {{ advert_id }}
	</a>

<!-- CONTROLLEURS -->
 <?php 
 	//Générer les URL=> http:monsite/platform
	$url = $this->get('router')->generate('oc_platform_home', array(), true); // Depuis le contrôleur
	//Affichage 
		 return new Response("Hello World !");
		 
	// 	 Les paramètres hors routes =>ex  /platform/advert/9?tag=developer.
	public function viewAction($id, Request $request)
	{   // On récupère notre paramètre tag
	    $tag = $request->query->get('tag');
	    return new Response("Affichage de l'annonce d'id : ".$id.", avec le tag : ".$tag );
	}
	
	$request->query->get('tag')  //Variables d'URL	
	$request->request->get('tag')		//Variables de formulaire
	$request->cookies->get('tag')		//Variables de cookie
	$request->server->get('REQUEST_URI')//ariables de serveur
		
	$request->headers->get('USER_AGENT')//Variables d'entête
	
	// 	Récupérer la méthode de la requête HTTP
	if ($request->isMethod('POST'))
	{
	  // Un formulaire a été envoyé, on peut le traiter ici
	}
	//Savoir si la requête est une requête AJAX
	if ($request->isXmlHttpRequest())
	{
	  // C'est une requête AJAX, retournons du JSON, par exemple
	}
	
	// 	Affichage
	public function viewAction($id)
	{
	    // On utilise le raccourci : il crée un objet Response
	    // Et lui donne comme contenu le contenu du template
	    return $this->get('templating')->renderResponse(
	      'OCPlatformBundle:Advert:view.html.twig',
	      array('id'  => $id)
	    );
	}


	//Twig 
	Afficher une variable => Pseudo : {{ pseudo }} Pseudo : <?php echo $pseudo; ?>
	
	Afficher l'index d'un tableau => Identifiant : {{ user['id'] }} <?php echo $user['id']; ?>
	
	Afficher l'attribut d'un objet, dont le getter respecte la convention $objet->getAttribut()
			
	=>	Identifiant : {{ user.id }} => Identifiant : <?php echo $user->getId(); ?>
	
	Afficher une variable en lui appliquant un filtre. Ici, « upper » met tout en majuscules :
		==> Pseudo en majuscules : {{ pseudo|upper }} =+> Pseudo en lettre majuscules : <?php echo strtoupper($pseudo); ?>
	
	Afficher une variable en combinant les filtres.
	« striptags » supprime les balises HTML.
	« title » met la première lettre de chaque mot en majuscule.
	Notez l'ordre d'application des filtres, ici striptags est appliqué, puis title.
		
	Message : {{ news.texte|striptags|title }} ==> <?php echo ucwords(strip_tags($news->getTexte())); ?>
	
	Utiliser un filtre avec des arguments.
	Attention, il faut que date soit un objet de type Datetime ici.{{ date|date('d/m/Y') }} --> <?php echo $date->format('d/m/Y'); ?>	
	ConcaténerIdentité : {{ nom ~ " " ~ prenom }}=> <?php echo $nom.' '.$prenom; ?>
	
	
	Upper =>Met toutes les lettres en majuscules. =>{{ var|upper }}

	Striptags => Supprime toutes les balises XML. => {{ var|striptags }}

	Date => Formate la date selon le format donné en argument. La variable en entrée doit être une instance de Datetime.
	=> {{ date|date('d/m/Y') }} =>Date d'aujourd'hui : {{ "now"|date('d/m/Y') }}

	Format = +> Insère des variables dans un texte, équivalent à printf. {{ "Il y a %s pommes et %s poires"|format(153, nb_poires) }}

	Length => Retourne le nombre d'éléments du tableau, ou le nombre de caractères d'une chaîne.
	
	Longueur de la variable : {{ texte|length }} => Nombre d'éléments du tableau : {{ tableau|length }}
	
	
	<!--
	{% if membre.age < 12 %}
		Il faut avoir 12 ans pour ce film.
	{% elseif membre.age < 18 %}
		OK bon film.
	{% else %}
		Un peu vieux pour voir ce film non ?
	{% endif %}
	
	<ul>

	  {% for membre in liste_membres %}
	
	    <li>{{ membre.pseudo }}</li>
	
	  {% else %}
	
	    <li>Pas d'utilisateur trouvé.</li>
	
	  {% endfor %}
	
	  </ul>
	
	
	
	<select>
	  {% for valeur, option in liste_options %}
	    <option value="{{ valeur }}">{{ option }}</option>
	  {% endfor %}
	</select>



	{% set foo = 'bar' %} <?php $foo = 'bar'; ?>
	
	
	
-->
	
<!-- 	Includes -->
	{{ render(controller("OCPlatformBundle:Advert:menu")) }}
	
	
	
	
	
	
	
	
	
	
	