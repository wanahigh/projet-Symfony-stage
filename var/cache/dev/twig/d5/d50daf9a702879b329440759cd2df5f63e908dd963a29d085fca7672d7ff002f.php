<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_e6def5d283c7b0d3c2f6d145fe24878db5aac479fa3974963bcb40a89d46fa05 extends Twig_Template
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
        $__internal_6d6b7b7098cf36dfbb90c9d0504bad7b27ae9f2b8b361297c1ee269f56500198 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d6b7b7098cf36dfbb90c9d0504bad7b27ae9f2b8b361297c1ee269f56500198->enter($__internal_6d6b7b7098cf36dfbb90c9d0504bad7b27ae9f2b8b361297c1ee269f56500198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_68c7592766b5322a14a8212b98295db1b4052b94b7297f74abeb4a132064c7ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68c7592766b5322a14a8212b98295db1b4052b94b7297f74abeb4a132064c7ca->enter($__internal_68c7592766b5322a14a8212b98295db1b4052b94b7297f74abeb4a132064c7ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_6d6b7b7098cf36dfbb90c9d0504bad7b27ae9f2b8b361297c1ee269f56500198->leave($__internal_6d6b7b7098cf36dfbb90c9d0504bad7b27ae9f2b8b361297c1ee269f56500198_prof);

        
        $__internal_68c7592766b5322a14a8212b98295db1b4052b94b7297f74abeb4a132064c7ca->leave($__internal_68c7592766b5322a14a8212b98295db1b4052b94b7297f74abeb4a132064c7ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
