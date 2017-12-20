<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_eebf265b945351ff1ae5e8fbf136104642ccdcfb0407c89cb770a87f07478daf extends Twig_Template
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
        $__internal_79e72599b885c9fcea0726cb9d380b78c9fb7afb357aa6d5b7ab70e9913bf545 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79e72599b885c9fcea0726cb9d380b78c9fb7afb357aa6d5b7ab70e9913bf545->enter($__internal_79e72599b885c9fcea0726cb9d380b78c9fb7afb357aa6d5b7ab70e9913bf545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_914f73ff99f562bf5ad0d28f1405623b408c2ff191cbc1857e6b26301951043e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_914f73ff99f562bf5ad0d28f1405623b408c2ff191cbc1857e6b26301951043e->enter($__internal_914f73ff99f562bf5ad0d28f1405623b408c2ff191cbc1857e6b26301951043e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_79e72599b885c9fcea0726cb9d380b78c9fb7afb357aa6d5b7ab70e9913bf545->leave($__internal_79e72599b885c9fcea0726cb9d380b78c9fb7afb357aa6d5b7ab70e9913bf545_prof);

        
        $__internal_914f73ff99f562bf5ad0d28f1405623b408c2ff191cbc1857e6b26301951043e->leave($__internal_914f73ff99f562bf5ad0d28f1405623b408c2ff191cbc1857e6b26301951043e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
