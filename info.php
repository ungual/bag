<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>BàG — info</title>
  <link rel="shortcut icon" type="image/png" href="assets/favicon3.png"/>
  <meta name="description" content="La Boite à Gants (BàG) est la récupérathèque de l'École de Recherche Graphique (ERG)">

  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/tables.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

  <header class="header">
      <div class="marquee">
        <div class="marquee">
          <h1 class="title">
            Info <span class="unicode">&#10033;</span>
            Info <span class="unicode">&#10033;</span>
            Info <span class="unicode">&#10033;</span>
            Info <span class="unicode">&#10033;</span>
            Info <span class="unicode">&#10033;</span>
            Info <span class="unicode">&#10033;</span>
            Info <span class="unicode">&#10033;</span>
            Info <span class="unicode">&#10033;</span>
            Info <span class="unicode">&#10033;</span>&nbsp;
          </h1>
          <h1 class="title">
            Info <span class="unicode">&#10033;</span>
            Info <span class="unicode">&#10033;</span>
            Info <span class="unicode">&#10033;</span>
            Info <span class="unicode">&#10033;</span>
            Info <span class="unicode">&#10033;</span>
            Info <span class="unicode">&#10033;</span>
            Info <span class="unicode">&#10033;</span>
            Info <span class="unicode">&#10033;</span>
            Info <span class="unicode">&#10033;</span>&nbsp;
          </h1>
        </div>
      </div>
      <h3>
        La BàG fonctionne en économie circulaire <br/>
        sa monnaie est le Glock (&#8370;)
      </h3>
  </header>

  <section class="container flex">

    <article class="item full">
      <button onclick="location.href='/'">
        <div class="rot"><span class="unicode">&#10148;</span></div>
      </button>
    </article>

    <article class="item third">
      <div class="cadre flex">

        <article class="item full">
          <h2>Horraires</h2>
          <table>
            <?php
              $horraires = file("infos/horraires.txt");
              foreach($horraires as $line)  {
                $line = str_replace("|", "</td><td><i>", $line);
                echo '<tr>';
                echo '<td>' . $line . '</i></td>';
                echo '</tr>';
              }
            ?>
          </table>
        </article>

        <article class="item full">
          <h2>Accès</h2>
          <p>
            87 rue du Page, <br/>
            1050 Bruxelles,  <br/>
            sur le plateau art.
          </p>
        </article>

      </div>
    </article>

    <article class="item half">
      <h2>Local</h2>
      <p>
        La BàG dispose de son propre espace de stockage de matériaux.
        Ces matériaux sont triés, reconditionnés et si nécessaire, répertoriés.
      <p>
      <p>
        Ceux-ci sont issus de récoltes effectuées au sein de
        l’école, donnés ou abandonnés par les étudiant.e.s.
        Mais aussi en dehors de l’enceinte scolaire: en rue,
        via des partenaires (entreprises, collectifs, commerces,
        etc...).
      </p>
      <p>
        Le local est utilisé comme magasin de matériaux, lors des heures d'ouverture.
      <p>
    </article>

    <article class="item half">
      <h2>Gagner des &#8370;</h2>
      <p>
        On peut acquérir des Glocks en alimentant la Boîtes à Gants en matériaux,
        mais aussi en s’impliquant dans la gestion de la BàG (permanences, gestion, reconditionnement, ...).
      </p>
      <p>
         <span class="unicode arrow"></span> A l'inscription (gratuite), 20 Glocks sont offerts.
      </p>
       <p>
         <span class="unicode arrow"></span> Les matériaux ramenés à la BàG offrent autant de Glocks que le prix auxquels ils seront revendus.
       </p>
       <p>
         <span class="unicode arrow"></span> Les permanences d'ouverture de la BàG sont rémunérées à 10&#8370; l'heure.
       </p>
       <p>
         Ce fonctionnement permet d’effacer ou de réduire les disparités de pouvoir d’achat entre les étudiant.e.s.
         Les questions de partage, de solidarité et d’échanges sont également des valeurs essentielles à ce projet.
      </p>
    </article>

    <article class="item half">
      <h2>Interdépendance</h2>
      <p>
        L'existence et la disponibilité de la BàG repose sur la participation de ses usager.ère.s.
        N'hésitez pas à nous <a href="equipe">contacter</a> (en tant que personne, entreprise, atelier, asbl, collectif, ...) si:
      </p>
      <p>
        <span class="unicode arrow"></span> si vous avez du materiel ou des chutes à donner dont vous voulez vous débarrassez.
      </p>
      <p>
        <span class="unicode arrow"></span> si vous êtes étudiant.e.s et voulez gagnez des &#8370; en participant au fonctionnement de la BàG.
      </p>
      <p>
        <span class="unicode arrow"></span> si vous voulez organisez des workshops, évenements, ou collaborez sur un projet.
      </p>
    </article>

    <div id="prix" class="item full">
      <h2>Prix approximatifs</h2>

      <div class="scroll-table-container">
        <table class="data-table">
        <tr>
          <td>Bois</td>
          <td>Tasseaux</td>
          <td>30mm</td>  <td class="glock">3&#8370;/m</td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td>20mm</td>  <td class="glock">2&#8370;/m</td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td>10mm</td>  <td class="glock">1&#8370;/m</td>
        </tr>
        <tr>
          <td></td>
          <td>Planches</td>
          <td>MDF</td>  <td class="glock">5&#8370;/m<sup>2</sup></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td>Agglo</td>  <td class="glock">3&#8370;/m<sup>2</sup></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td>Contreplaqué</td>  <td class="glock">8&#8370;/m<sup>2</sup></td>
        </tr>
        <tr>
          <td>Métal</td>
          <td></td>
          <td>Acier</td>  <td class="glock">2&#8370;/kg</td>
        </tr>
        <tr>
          <td>Papier</td>
          <td></td>
          <td>Papier</td> <td class="glock">3&#8370;/m<sup>2</sup></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td>Carton</td>  <td class="glock">2&#8370;/m<sup>2</sup></td>
        </tr>
        <tr>
          <td>Verre</td>
          <td></td>
          <td>Double</td><td class="glock">50&#8370;/m<sup>2</sup></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td>Simple</td>  <td class="glock">25&#8370;/m<sup>2</sup></td>
        </tr>
        <tr>
          <td>Plastiques</td>
          <td></td>
          <td>Plexiglass</td> <td class="glock">15&#8370;/m<sup>2</sup></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td>PVC</td>  <td class="glock">5&#8370;/m</td>
        </tr>
        <tr>
          <td>Peinture</td>
          <td></td>
          <td>Acrylique</td>
          <td class="glock">5&#8370;/l</td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td>Simple</td>  <td class="glock">12&#8370;/l</td>
        </tr>
      </table>
    </div>

      <p>
        <span class="unicode">&#9733;</span>
        Également à la BàG: outils, matériels de dessins, quincailleries, textiles, pigments, etc.
      </p>

    </div>

    <article class="item right full">
      <button onclick="location.href='/'"> <span class="unicode">&#10148;</span> </button>
    </article>

  </section>


  <footer class="footer">
      <div class="marquee">
        <h1 class="title">
          Info <span class="unicode">&#10033;</span>
          Info <span class="unicode">&#10033;</span>
          Info <span class="unicode">&#10033;</span>
          Info <span class="unicode">&#10033;</span>
          Info <span class="unicode">&#10033;</span>
          Info <span class="unicode">&#10033;</span>
          Info <span class="unicode">&#10033;</span>
          Info <span class="unicode">&#10033;</span>
          Info <span class="unicode">&#10033;</span>&nbsp;
        </h1>
        <h1 class="title">
          Info <span class="unicode">&#10033;</span>
          Info <span class="unicode">&#10033;</span>
          Info <span class="unicode">&#10033;</span>
          Info <span class="unicode">&#10033;</span>
          Info <span class="unicode">&#10033;</span>
          Info <span class="unicode">&#10033;</span>
          Info <span class="unicode">&#10033;</span>
          Info <span class="unicode">&#10033;</span>
          Info <span class="unicode">&#10033;</span>&nbsp;
        </h1>
      </div>
  </footer>

</body>

</html>