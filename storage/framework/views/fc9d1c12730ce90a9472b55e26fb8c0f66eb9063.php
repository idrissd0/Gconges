<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="<?php echo e(asset('CssFiles/App.css')); ?>">
    </head>
  <header>

    <h1 id="title">Gestion des Congés</h1>
  </header>
  <body>
  <div id="form-outer">
    <h2 id="description">Vos informations Professionnelle</h2>
    <form id="survey-form" method="POST">
      <?php echo csrf_field(); ?>
      <!-- demande de Matricule -->
      <div class="rowTab">
        <div class="labels">
        <label id="name-label" for="matricule">*Matricule :</label>
        </div>
        <div class="rightTab">
          <input autofocus type="number" name="matricule" id="matricule" class="input-field" required>
        </div>
      </div>
        <!-- demande de Nom -->
      <div class="rowTab">
        <div class="labels">
        <label id="name-label" for="name">*Nom :</label>
        </div>
        <div class="rightTab">
          <input autofocus type="text" name="nom" id="name" class="input-field"  required>
        </div>
      </div>
      <!-- demande de Prenom-->
      <div class="rowTab">
        <div class="labels">
          <label id="Prenom-label" for="prenom">*Prénom :</label>
        </div>
        <div class="rightTab">
          <input type="text" name="prenom" id="prenom" class="input-field" required>
        </div>
      </div>
       <!-- demande de Nom en Arabe -->
      <div class="rowTab">
        <div class="labels">
        <label id="name-label" for="nameA">*Nom en Arabe :اسم</label>
        </div>
        <div class="rightTab">
          <input autofocus type="text" name="nameA" id="name" class="input-field" >
        </div>
      </div>
      <!-- demande de Prenom en Arabe-->
      <div class="rowTab">
        <div class="labels">
          <label id="Prenom-label" for="prenomA">*Prénom en Arabe :</label>
        </div>
        <div class="rightTab">
          <input type="text" name="prenomA" id="prenomA" class="input-field"   >
        </div>
      </div>
      <!-- demande de Numéro de Carte d'indentite  -->
      <div class="rowTab">
        <div class="labels">
      <label id="NumCIN-label" for="NumCIN">*Numéro de carte d'indentite :</label>
        </div>
        <div class="rightTab">
      <input  type="text" name="NumCIN" id="NumCIN" class="input-field"  required>
        </div>
      </div>
<!-- demande de Date de Naissance -->

      <!-- choix du service-->
      <div class="rowTab">
        <div class="labels">
          <label for="currentPosi">*Votre  :</label>
        </div>
        <div class="rightTab">
          <select id="dropdown" name="currentPosi" class="dropdown" required>
            <option disabled selected value>Service</option>
            <option>Presidente</option>
            <option>Secrétarit de la Présidente</option>
            <option>B. des Projets</option>
            <option>Service Communication</option>
            <option>Deriction des Services</option>
            <option>RAS</option>
            <option></option>
           </select>
        </div>
      </div>
         <!-- demande de Date affectation -->
         <div class="rowTab">
          <div class="labels">
            <label id="number-label" for="DateAff">*Date de affectation :</label>
          </div>
          <div class="rightTab">
            <input type="date" name="DateAff" id="DateAff"  class="input-field"   required>
          </div>
        </div>
        <!-- choix du Fonction -->
      <div class="rowTab">
        <div class="labels">
          <label for="currentPos">*Votre  :</label>
        </div>
        <div class="rightTab">
          <select id="dropdown" name="Fonction" class="dropdown" required>
            <option disabled selected value>Fonction</option>
            <option>Chef de Service</option>
            <option>Chef de Bureau</option>
            <option>Menuisier</option>
            <option>Conducteur</option>
            <option>Soudeur</option>
          </select>
        </div>
      </div>
      <!-- choix du Grade -->
      <div class="rowTab">
        <div class="labels">
          <label for="currentPos">*Votre  :</label>
        </div>
        <div class="rightTab">
          <select id="dropdown" name="Grade" class="dropdown" required>
            <option disabled selected value>Grade</option>
            <option>Technicien</option>
            <option>Redacteur</option>
            <option>Ingenieur</option>
            <option>Administrateur</option>
          </select>
        </div>
      </div>

      <h2>Vos information Personnel</h2>
  <!-- demande de Telephone -->
  <div class="rowTab">
    <div class="labels">
    <label id="name-label" for="Telephone">*Téléphone :</label>
    </div>
    <div class="rightTab">
      <input autofocus type="tel" name="Telephone" id="Telephone" class="input-field"  required>
    </div>
  </div>
    <!-- demande de Email -->
    <div class="rowTab">
      <div class="labels">
      <label id="name-label" for="Email">*Email :</label>
      </div>
      <div class="rightTab">
        <input autofocus type="email" name="Email" id="Email" class="input-field"  required>
      </div>
    </div>
      <!-- demande de Adresse -->
      <div class="rowTab">
        <div class="labels">
        <label id="name-label" for="adresse">*Adresse :</label>
        </div>
        <div class="rightTab">
          <input autofocus type="text" name="adresse" id="adresse" class="input-field" required>
        </div>
      </div>
      <!-- demande de Adresse en Arabe -->
      <div class="rowTab">
          <div class="labels">
          <label id="name-label" for="adresse">*Adresse en Arabe :عنوان</label>
          </div>
            <div class="rightTab">
              <input autofocus type="text"  name="adresseA" id="adresseA" class="input-field"  >
            </div>
        </div>
        <!-- demande de Sexe -->
      <div class="rowTab">
        <div class="labels">
        <label for="Sexe">Sexe:</label>
        </div>
        <div class="rightTab">
        <strong><ul id="preferences" >
            <li class="radio"><label><input name="Masculin" value="Masculin" type="radio">Masculin</label>
            </li>
            <li class="radio"><label><input name="Féminin" value="Féminin" type="radio">Féminin</label>
            </li>
            <li class="radio"><label><input name="Indéterminé" value="Indéterminé" type="radio" >Indéterminé</label>
            </li>
          </ul></strong>
        </div>
      </div>
       <!-- demande de Etat Matmoniale -->
       <div class="rowTab">
        <div class="labels">
        <label for="EMatmoniale">Etat Matmoniale:</label>
        </div>
        <div class="rightTab">
            
            <select id="dropdown" name="Etat_Matmoniale" class="dropdown" required>
                <option disabled selected value>Marié(e)</option>
                <option>Dévorcé</option>
                <option>Inconnu</option>
                <option>Célibataire</option>
                <option>Veuf(ve)</option>
            </select>
        </div>
      </div>
       <!-- demande de Nationalité -->
          <div class="rowTab">
            <div class="labels">
            <label for="Natio">Nationalité:</label>
            </div>
            <div class="rightTab">
            
            <select id="dropdown" name="Nationalité" class="dropdown" required>
                <option disabled selected value>Marocain</option>
                <option>Etrangére</option>
            </select>
            </div>
          </div>
          <!--demande date de naissance-->
      <div class="rowTab">
        <div class="labels">
          <label id="date-label" for="age">*Date de Naissance :</label>
        </div>
        <div class="rightTab">
          <input type="date" name="dateNaiss" id="age" class="input-field" required >
        </div>
      </div>
      <!--Observation-->
      <div class="rowTab">
        <div class="labels">
        <label id="name-label" for="observation">Observation :</label>
        </div>
        <div class="rightTab">
          
          <textarea name="Obser" id="Obs" class="input-field" cols="12"></textarea>
        </div>
      </div>

      <!--Information du Conges-->
      <strong>
      <fieldset class="field">
        <legend><strong>Information de Congés</strong></legend>
         <!--Date debut du conges-->
      <div class="rowTab">
        <div class="labels">
          <label id="date-label" for="Date">*Date Début du congé :</label>
        </div>
        <div class="rightTab">
          <input type="date" name="DateDC" id="Date" class="input-field" required >
        </div>
      </div>
       <!--Date fin du conges-->
       <div class="rowTab">
        <div class="labels">
          <label id="date-label" for="Date">*Date fin du congé :</label>
        </div>
        <div class="rightTab">
          <input type="date" name="DateFC" id="Date" class="input-field" required >
        </div>
      </div>
       <!--Date debut du conges-->
       <div class="rowTab">
        <div class="labels">
          <label id="date-label" for="Date">*Date Retour:</label>
        </div>
        <div class="rightTab">
          <input type="date" name="DateR" id="Date" class="input-field" required >
        </div>
      </div>
       <!--Nombre du jour de Congé-->
       <div class="rowTab">
        <div class="labels">
          <label id="date-label" for="NbrConge">*Nombre du jour de Congé :</label>
        </div>
        <div class="rightTab">
          <input type="number" name="NbrC" id="Date" class="input-field"   required >
        </div>
      </div>
       <!--Type de Congé-->
       <div class="rowTab">
        <div class="labels">
          <label for="currentPos">*Type de Congé :</label>
        </div>
        <div class="rightTab">
          <select id="dropdown" name="TConges" class="dropdown" required>
            <option disabled selected value>Congé</option>
            <option>Conge administratif</option>
            <option>Conge de maladie</option>
            <option>Conge de maternité</option>
            <option>Conge exceptionnels</option>
            <option>Accident de travail </option>
            <option>La meque</option>
            <option>Autorisation d'allaitement</option>
            <option>Autre</option>
            <option>Absence Non Justifié</option>
            </select>
        </div>
      </div>
         <!--Decision-->
         <div class="rowTab">
          <div class="labels">
            <label for="currentPos">*Décision :</label>
          </div>
          <div class="rightTab">
            <select id="dropdown" name="Decisions" class="dropdown" >
              <option disabled selected value>Décision</option>
              <option></option>
              <option></option>
              <option> </option>
              <option> </option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              </select>
          </div>
        </div>
               <!--Adresse du Conge-->
       <div class="rowTab">
        <div class="labels">
          <label id="name-label" for="Adrs">*Adresse du Congé:</label>
        </div>
        <div class="rightTab">
          <input  type="text" name="Adrs" id="Adrs" class="input-field" required>
        </div>
      </div>
          <!--Observation-->
          <div class="rowTab">
            <div class="labels">
            <label id="name-label" for="observation">*Observation :</label>
            </div>
            <div class="rightTab">
              <input autofocus type="text" name="Obse" id="Obs" class="input-field"  required>
            </div>
          </div>
      </fieldset></strong>
















      <button type="submit" value="submit" id="submit">Submit !</button>
      <button type="reset" value="Initialiser" id="reset">Initialiser !</button>
      <button type="button" value="Modifier" id="submit">Modifier !</button>

    </form>
  </div>

  </body>
</html>
<?php /**PATH C:\xampp\htdocs\GCformulaire\resources\views/welcome.blade.php ENDPATH**/ ?>