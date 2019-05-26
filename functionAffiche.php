<?php

function affichePersonnes($table){
    $html = '<table>
            <thead>
            <tr>
                <th>nom</th>
                <th>prenom</th>
                <th>genre</th>
                <th>email</th>
                <th>Date de naissance</th>
                <th>Numero de telephone</th>
            </tr>
            </thead>
            <tbody>';
    foreach($table as $key=>$eleve) {

        $html .= ' <tr><form method="post" action="suppEleve.php">
                <td><input type="checkbox" name="supp[]" value="'.$table[$key]['id'].'"><a href=modifEleve.php?id='.$table[$key]['id'].'>'.$table[$key]['nom']. '</a></td>
                <td>' . $table[$key]['prenom'] . '</td>
                <td>' . $table[$key]['genre'] . '</td>
                <td>' . $table[$key]['email'] . '</td>
                <td>' . $table[$key]['date'] . '</td>
                <td>' . $table[$key]['tel'] . '</td>

            </tr>';

    }
    $html .= ' </tbody>
    </table>';
    $html.="<input type='submit' value='Supprimer les cases sélectionnées'><br /></form>";
    $html.="<a href='ajouterEleve.php'>Ajouter un eleve</a>";
    return $html;
}
