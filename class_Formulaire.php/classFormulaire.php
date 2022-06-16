<?php
class Formulaire
{
    public function __construct($method = 'POST', $action = '', $name = 'formulaire')
    {
       return '<form name="' . $name . '" method="' . $method . '" action="' . $action . '">';
    }
    public function input($type='text', $name='nom', $placeholder = '', $class = '')
    {
        return '<input type="' . $type . '" name="' . $name . '" placeholder="' . $placeholder . '" class="' . $class . '">';
    }
    public function textarea($name='textarea', $class='', $valeur = '')
    {
        return '<textarea name="' . $name . '" class="' . $class .'">'.$valeur.'</textarea>';
    }
    public function select($value=array(), $nom='select',$class='')
    {
        $select = '<select name="' . $nom . '" class="' . $class . '">';
        foreach ($value as $key => $val) {
            $select .= '<option value="' . $key . '">' . $val . '</option>';
        }
        $select .= '</select>';
        return $select;
    }
    public function radio($nom="radio",$values=array(),$class='')
    {
        $radio = '<div class="' . $class . '">';
        foreach ($values as $key => $label) {
            $radio .= '<input type="radio" name="' . $nom . '" value="' . $key . '">' . $label . '</input>';
        }
        $radio .= '</div>';
        return $radio;
    }

    public function submit($nom='submit', $value='valider', $class='')
    {
        return '<input type="submit" name="' . $nom . '" value="' . $value . '" class="' . $class . '">';
    }
    // créer une methode type file
    // ************************************************
    public function file($name='file', $class='')
    {
        return '<input type="file" name="' . $name . '" class="' . $class . '">';
    }
    // créer une methode type checkbox
    // ************************************************
    public function checkbox($name='checkbox', $class='',$label='',$value='')
    {
        return '<input type="checkbox" name="' . $name . '" class="' . $class . '" value="' . $value . '">
        <label>'.$label.'</label>';
    }
    // créer une methode type button reset
    // ************************************************
    public function buttonReset($name='reset', $class='', $value='reset')
    {
        return '<input type="reset" name="' . $name . '" value="' . $value . '" class="' . $class . '">';
    }
    // créer une methode type button btn
    // ************************************************
    public function button($name='btn', $class='', $value='btn')
    {
        return '<input type="button" name="' . $name . '" value="' . $value . '" class="' . $class . '">';
    }
   
}
 $contact = new Formulaire();
echo $contact->input();
echo $contact->textarea();
 $liste = array(
    'MR' => 'Monsieur',
    'MME' => 'Madame',
);
echo $contact->select($liste);
echo $contact->radio();
echo $contact->submit();
echo $contact->file();
echo $contact->checkbox();
echo $contact->buttonReset();
echo $contact->button();
?>
<?php
class Formulaire
{
    public function __construct($method='POST',$action='',$name='formulaire')
    {
        return '<form name="'.$name.'" method="'.$method.'" action="'.$action.'">';
    }
    public function input($type='text',$nom='input',$placeholder='',$class='')
    {
        switch($type)
        {
            case 'text':
                $type = 'text';
            break;
            case 'email':
                $type = 'email';
            break;
            case 'password':
                $type = 'password';
            break;
            case 'tel':
                $type = 'tel';
            break;
            default:
                $type = 'text';
            break;
        }
        return '<input type="'.$type.'" name="'.$nom.'" placeholder="'.$placeholder.'" class="'.$class.'" />';
    }
    public function input2($args=array())
    {
        // On definit les valeurs par défaults dans un tableau
        $default = array(
            'type'          => 'text',
            'nom'           => 'input',
            'placeholder'   => '',
            'class'         => ''
        );
        // On fusionne les 2 tableaux
        $args = array_merge($args,$default);
        switch($args['type'])
        {
            case 'text':
                $type = 'text';
            break;
            case 'email':
                $type = 'email';
            break;
            case 'password':
                $type = 'password';
            break;
            case 'tel':
                $type = 'tel';
            break;
            default:
                $type = 'text';
            break;   
        }
        return '<input type="'.$type.'" name="'.$args['nom'].'" placeholder="'.$args['placeholder'].'" class="'.$args['class'].'" />';
    }
    public function textarea($nom='textarea',$class='',$valeur='')
    {
        return '<textarea name="'.$nom.'" class="'.$class.'">'.$valeur.'</textarea>';
    }
    public function select($values=array(),$nom='select',$class='')
    {
        $str = '<select name="'.$nom.'" class="'.$class.'">';
        foreach($values as $key => $valeur)
        {
            $str.= '<option value="'.$key.'">'.$valeur.'</option>';
        }
        $str.= '</select>';
        return $str;
    }
    public function radio($nom='radio',$values=array(),$class='')
    {
        $str= '';
        foreach($values as $val => $label)
        {
            $str.= '<input type="radio" name="'.$nom.'" class="'.$class.'" value="'.$val.'"><label>'.$label.'</label>';
        }
        return $str;
    }
    public function checkbox1($nom='',$valeur='',$class='',$label='')
    {
        return '<input type="checkbox" name="'.$nom.'" value="'.$valeur.'" class="'.$class.'"><label>'.$label.'</label>';
    }
    public function checkboxMultiple($nom='checkbox',$values=array(),$class='',$label='')
    {
        $str = '';
        foreach($values as $valeur => $label)
        {
            $str.= '<input type="checkbox" name="'.$nom.'" value="'.$valeur.'" class="'.$class.'"><label>'.$label.'</label>';
        }
        return $str;
    }
    public function file($nom='fichier',$class='')
    {
        return '<input type="file" name="'.$nom.'" class="'.$class.'" />';
    }
    public function button($type='bouton',$nom='bouton',$class='',$valeur='bouton')
    {
        return '<button type="'.$type.'" name="'.$nom.'" class="'.$class.'">'.$valeur.'</button>';
    }
    private function fin()
    {
        return '</form>';
    }

    public function submit($name='submit',$valeur='envoyer',$class='')
    {
        $str = '<button type="submit" name="'.$name.'" class="'.$class.'">'.$valeur.'</button>';
        $this->fin();
        return $str;
    }
    // Méthode permettant de traiter le formulaire
    public function traitement()
    {
        // On récupère les superglobales $_POST, $_GET, $_FILES
        global $_POST;
        global $_GET;
        global $_FILES;
        // On parcourt l'ensemble des champs POST
        foreach($_POST as $post)
        {
            // On affiche le tableau multidimensionnel post
            echo '<pre>';
            print_r($post);
            echo '</pre>';
        }
        // On parcourt l'ensemble des champs GET
        foreach($_GET as $get)
        {
            // On affiche le tableau multidimensionnel get
            echo '<pre>';
            print_r($get);
            echo '</pre>';
        }
        // On parcourt l'ensemble des fichiers
        foreach($_FILES as $file)
        {
            // On affiche le tableau multidimensionnel file
            echo '<pre>';
            print_r($file);
            echo '</pre>';
        }
    }

    
}
$contact = new Formulaire();
$contact->input('text','prenom','Votre prénom','input-prenom');
$contact->input2(array('nom' => 'prenom','placeholder' => 'Votre prénom', 'class' => 'input-prenom'));
$contact->textarea();

$liste = array(
    'Mr'    => 'Monsieur',
    'Mme'   => 'Madame',
);
// Comparaison entre if,elseif,else et switch
$age = 18;
if($age == 12){
    echo 'tu as 12 ans';
}
else if($age == 14)
{
    echo 'tu as 14 ans';
}
else if($age == 18)
{
    echo 'bravo tu es majeur(e) en france';
}
else if($age == 21)
{
    echo 'bravo tu es majeur(e) dans le monde entier';
}
else
{
    echo 'Tu as pas le bon age !!!';
}
switch($age)
{
    case 12:
        echo 'tu as 12 ans';
    break;
    case 14:
        echo 'tu as 14 ans';
    break;
    case 18:
        echo 'bravo tu es majeur(e) en france';
    break;
    case 21:
        echo 'bravo tu es majeur(e)  dans le monde entier';
    break;
    default:
        echo 'tu as pas le bon age !!!!';
        if($age >= 30)
        {
            echo 'tu peux aller au V&B';
        }
    break;
}
// securiser la methode button
$contact->button('submit','envoyer','bouton-envoyer');
$contact->traitement();

?>