<?php
// -- Contrôleur frontal --
spl_autoload_register(function ($class_name) {
    if (file_exists('./controleur/personne/'.$class_name . '.php')) {
        require_once './controleur/personne/'.$class_name . '.php';
        return true;
    }
    return false;
});


// -- Contrôleur frontal --
spl_autoload_register(function ($class_name) {
    if (file_exists('./controleur/visiteur/'.$class_name . '.php')) {
        require_once './controleur/visiteur/'.$class_name . '.php';
        return true;
    }
    return false;
});
spl_autoload_register(function ($class_name) {
    if (file_exists('./controleur/Admin/'.$class_name . '.php')) {
        require_once './controleur/Admin/'.$class_name . '.php';
        return true;
    }
    return false;
});

// -- Contrôleur frontal --
spl_autoload_register(function ($class_name) {
    if (file_exists('./controleur/transporteur/'.$class_name . '.php')) {
        require_once './controleur/transporteur/'.$class_name . '.php';
        return true;
    }
    return false;
});

// -- Contrôleur frontal --
spl_autoload_register(function ($class_name) {
    if (file_exists('./controleur/'.$class_name . '.php')) {
        require_once './controleur/'.$class_name . '.php';
        return true;
    }
    return false;
});

spl_autoload_register(function ($class_name) {
    if (file_exists('./modele/'.$class_name . '.php')) {
        require_once './modele/'.$class_name . '.php';
        return true;
    }
    return false;
});

// -- Classes frontal --
spl_autoload_register(function ($class_name) {
    if (file_exists('./modele/classes/'.$class_name . '.php')) {
        require_once './modele/classes/'.$class_name . '.php';
        return true;
    }
    return false;
});



// -- Classes/Personne frontal --
spl_autoload_register(function ($class_name) {
    if (file_exists('./modele/classes/personne/'.$class_name . '.php')) {
        require_once './modele/classes/personne/'.$class_name . '.php';
        return true;
    }
    return false;
});
spl_autoload_register(function ($class_name) {
    if (file_exists('./modele/classes/transporteur/'.$class_name . '.php')) {
        require_once './modele/classes/transporteur/'.$class_name . '.php';
        return true;
    }
    return false;
});
spl_autoload_register(function ($class_name) {
    if (file_exists('./modele/classes/terminal/'.$class_name . '.php')) {
        require_once './modele/classes/terminal/'.$class_name . '.php';
        return true;
    }
    return false;
});
spl_autoload_register(function ($class_name) {
    if (file_exists('./modele/classes/terminal/'.$class_name . '.php')) {
        require_once './modele/classes/terminal/'.$class_name . '.php';
        return true;
    }
    return false;
});
spl_autoload_register(function () {
    if (file_exists('../../modele/classes/terminal/TerminalCarteDAO.php')) {
        require_once '../../modele/classes/terminal/TerminalCarteDAO.php';
        return true;
    }
    return false;
});
spl_autoload_register(function () {
    if (file_exists('../../modele/classes/transporteur/Transporteur.php')) {
        require_once '../../modele/classes/transporteur/Transporteur.php';
        return true;
    }
    return false;
});
spl_autoload_register(function () {
    if (file_exists('../../modele/classes/transporteur/TransporteurDAO.php')) {
        require_once '../../modele/classes/transporteur/TransporteurDAO.php';
        return true;
    }
    return false;
});
spl_autoload_register(function () {
    if (file_exists('../../modele/classes/terminal/TerminalDAO.php')) {
        require_once '../../modele/classes/terminal/TerminalDAO.php';
        return true;
    }
    return false;
});
spl_autoload_register(function () {
    if (file_exists('../../modele/classes/terminal/Terminal.php')) {
        require_once '../../modele/classes/terminal/Terminal.php';
        return true;
    }
    return false;
});
spl_autoload_register(function () {
    if (file_exists('../../modele/classes/transporteur/TerminalEntrepriseDAO.php')) {
        require_once '../../modele/classes/transporteur/TerminalEntrepriseDAO.php';
        return true;
    }
    return false;
});
spl_autoload_register(function () {
    if (file_exists('../../modele/classes/transporteur/TerminalEntreprise.php')) {
        require_once '../../modele/classes/transporteur/TerminalEntreprise.php';
        return true;
    }
    return false;
});
spl_autoload_register(function () {
    if (file_exists('./modele/classes/adresse/Adresse.php')) {
        require_once './modele/classes/adresse/Adresse.php';
        return true;
    }
    return false;
});
spl_autoload_register(function () {
    if (file_exists('../../modele/classes/adresse/Adresse.php')) {
        require_once '../../modele/classes/adresse/Adresse.php';
        return true;
    }
    return false;
});
spl_autoload_register(function ($class_name) {
    if (file_exists('./controleur/transporteur/'.$class_name . '.php')) {
        require_once './controleur/transporteur/'.$class_name . '.php';
        return true;
    }
    return false;
});

spl_autoload_register(function ($class_name) {
    if (file_exists('./vue/transporteur/'.$class_name . '.php')) {
        require_once './vue/transporteur/'.$class_name . '.php';
        return true;
    }
    return false;
});


// -- Classes/usager frontal --
spl_autoload_register(function ($class_name) {
    if (file_exists('./modele/classes/usager/'.$class_name . '.php')) {
        require_once './modele/classes/usager/'.$class_name . '.php';
        return true;
    }
    return false;
});

// -- Classes/Terminal frontal --
spl_autoload_register(function ($class_name) {
    if (file_exists('./modele/classes/terminal/'.$class_name . '.php')) {
        require_once './modele/classes/terminal/'.$class_name . '.php';
        return true;
    }
    return false;
});

// -- Classes/admin frontal --
spl_autoload_register(function ($class_name) {
    if (file_exists('./modele/classes/admin/'.$class_name . '.php')) {
        require_once './modele/classes/admin/'.$class_name . '.php';
        return true;
    }
    return false;
});

// -- Classes/carte frontal --
spl_autoload_register(function ($class_name) {
    if (file_exists('./modele/classes/transporteur/'.$class_name . '.php')) {
        require_once './modele/classes/transporteur/'.$class_name . '.php';
        return true;
    }
    return false;
});

// -- Classes/carte frontal --
spl_autoload_register(function ($class_name) {
    if (file_exists('./modele/classes/message/'.$class_name . '.php')) {
        require_once './modele/classes/message/'.$class_name . '.php';
        return true;
    }
    return false;
});

// -- Classes/carte frontal --
spl_autoload_register(function ($class_name) {
    if (file_exists('./modele/classes/carte/'.$class_name . '.php')) {
        require_once './modele/classes/carte/'.$class_name . '.php';
        return true;
    }
    return false;
});

// -- Classes/adresse frontal --
spl_autoload_register(function ($class_name) {
    if (file_exists('./modele/classes/carte/'.$class_name . '.php')) {
        require_once './modele/classes/adresse/'.$class_name . '.php';
        return true;
    }
    return false;
});

spl_autoload_register(function ($class_name) {
    if (file_exists('./modele/config/'.$class_name . '.php')) {
        require_once './modele/config/'.$class_name . '.php';
        return true;
    }
    return false;
});


// -- Contrôleur frontal --
spl_autoload_register(function () {
    if (file_exists('./modele/IdGenerator.php')) {
        require_once './modele/IdGenerator.php';
        return true;
    }
    return false;
});

// -- Contrôleur frontal --
spl_autoload_register(function () {
    if (file_exists('./modele/IdGenerator.php')) {
        require_once './modele/IdGenerator.php';
        return true;
    }
    return false;
});


// -- Contrôleur frontal --
spl_autoload_register(function () {
    if (file_exists('./modele/InputValidation.php')) {
        require_once './modele/InputValidation.php';
        return true;
    }
    return false;
});

// -- Contrôleur frontal --
spl_autoload_register(function () {
    if (file_exists('./controleur/Action.interface.php')) {
        require_once('./controleur/Action.interface.php');
        return true;
    }
    return false;
});
spl_autoload_register(function () {
    if (file_exists('./controleur/RequirePRGAction.php')) {
        require_once('./controleur/RequirePRGAction.php');
        return true;
    }
    return false;
});