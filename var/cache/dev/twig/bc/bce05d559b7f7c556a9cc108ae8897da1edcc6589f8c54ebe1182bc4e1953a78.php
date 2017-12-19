<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_8684aea78695ed7905dc261447fb0273cf95d756a5786fb3ac7d5aafaad9a840 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1315d9f8cf5f3a2debac38a757ca4aa93dd96532e01089fbb11e51851308ef25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1315d9f8cf5f3a2debac38a757ca4aa93dd96532e01089fbb11e51851308ef25->enter($__internal_1315d9f8cf5f3a2debac38a757ca4aa93dd96532e01089fbb11e51851308ef25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_d8ba2ff0394afde49a507a2e81f6e268016cd530abd5e2b3c914f240ae3b9fd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8ba2ff0394afde49a507a2e81f6e268016cd530abd5e2b3c914f240ae3b9fd8->enter($__internal_d8ba2ff0394afde49a507a2e81f6e268016cd530abd5e2b3c914f240ae3b9fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_1315d9f8cf5f3a2debac38a757ca4aa93dd96532e01089fbb11e51851308ef25->leave($__internal_1315d9f8cf5f3a2debac38a757ca4aa93dd96532e01089fbb11e51851308ef25_prof);

        
        $__internal_d8ba2ff0394afde49a507a2e81f6e268016cd530abd5e2b3c914f240ae3b9fd8->leave($__internal_d8ba2ff0394afde49a507a2e81f6e268016cd530abd5e2b3c914f240ae3b9fd8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
