<?php
/*
Template name: legal_notice
*/

get_header();
?>

<div class="wrapper d-flex justify-content-center align-items-center bg-light" style="height: 120em;">

  <div class="card shadow w-75" style="width: 600px;">
    <div class="card-body">
      <div class="row">
        <div class="col-3">
          <img src="https://mdbootstrap.com/img/illustrations/graphics(4).png" alt="" class="img-fluid">
        </div>
        <div class="col-10">
          <h1 class="card-title"><?php bloginfo()?></h1>
          <h3 class="card-subtitle text-muted mb-2"><?php the_title()?></h3>
          <p class="card-text">
          
                            <h4>Identité</h4>
                            <p>Nom du site web : < Nom du site ></p>
                            <p>Adresse : < http://nomdusite.domaine ></p>
                            <p>Propriétaire : < propriétaire ></p>
                            <p>Responsable de publication : < nom du contact > | Contacter…</p>

                            <p>Conception et réalisation : < concepteur >
                            <p>Animation : < animateur >
                            <p>Hébergement : < hébergeur >
                            <p>Personne morale (retirer ce bloc au besoin)

                            < ‘Raison sociale’ – ‘Forme juridique’ au capital de XXX XXX euros – RCS XXXXXX – ‘Adresse complète’ >
                            < ‘Téléphone’ – ‘Email’ >

                            <h4>Conditions d’utilisation</h4>

                            <p>L’utilisation du présent site implique l’acceptation pleine et entière des conditions générales d’utilisation décrites ci-après. Ces conditions d’utilisation sont susceptibles d’être modifiées ou complétées à tout moment.</p>
                            
                            <h4>Informations</h4>

                            <p>Les informations et documents du site sont présentés à titre indicatif, ne revêtent pas un caractère exhaustif, et ne peuvent engager la responsabilité du propriétaire du site.</p>
                            <p>Le propriétaire du site ne peut être tenu responsable des dommages directs et indirects consécutifs à l’accès au site.</p>
                            
                            <h4>Interactivitée</h4>
                            
                            <p>Les utilisateurs du site peuvent éventuellement y déposer du contenu, apparaissant sur le site dans des espaces dédiés (notamment via les commentaires). Le contenu déposé reste sous la responsabilité de leurs auteurs, qui en assument pleinement l’entière responsabilité juridique.</p>
                            <p>Le propriétaire du site se réserve le droit de retirer sans préavis et sans justification tout contenu déposé par les utilisateurs qui ne satisferait pas à la charte déontologique du site ou à la législation en vigueur.</p>
                            
                            <h4>Propriété intellectuelle</h4>
                            
                            <p>Sauf mention contraire, tous les éléments accessibles sur le site (textes, images, graphismes, logo, icônes, sons, logiciels, etc.) restent la propriété exclusive de leurs auteurs, en ce qui concerne les droits de propriété intellectuelle ou les droits d’usage. </p>
                            <p>Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de l’auteur.</p>
                            <p>Toute exploitation non autorisée du site ou de l’un quelconque des éléments qu’il contient est considérée comme constitutive d’une contrefaçon et peut être poursuivie en justice. </p>
                            <p>Les marques et logos reproduits sur le site sont déposés par les sociétés qui en sont propriétaires.</p>
                            
                            <h4> Liens</h4>

                            <h5> Liens sortants</h5>
                            <p>Le propriétaire du site décline toute responsabilité et n’est pas engagé par le référencement via des liens hypertextes, de ressources tierces présentes sur le réseau Internet, tant en ce qui concerne leur contenu que leur pertinence.</p>

                            <h5> Liens entrants</h5>
                            
                            <p>Le propriétaire du site autorise les liens hypertextes vers l’une des pages de ce site, à condition que ceux-ci ouvrent une nouvelle fenêtre et soient présentés de manière non équivoque afin d’éviter :</p>

                            - tout risque de confusion entre le site citant et le propriétaire du site
                            - ainsi que toute présentation tendancieuse, ou contraire aux lois en vigueur.

                            <p>Le propriétaire du site se réserve le droit de demander la suppression d’un lien s’il estime que le site source ne respecte pas les règles ainsi définies.</p>
                            
                            <h4>Confidentialité</h4>
                            
                            <p>Tout utilisateur dispose d’un droit d’accès, de rectification et d’opposition aux données personnelles le concernant, en effectuant sa demande écrite et signée, accompagnée d’une preuve d’identité. </p>
                            <p>Le site ne recueille pas d’informations personnelles, et n’est pas assujetti à déclaration à la CNIL.</p>
                            
                            <h4>Crédits</h4>
                            
                            <p>< credits photo, icones, etc. ></p>
            </p>
        </div>
        </div>
    </div>
  </div>
</div>

<?php
get_footer();