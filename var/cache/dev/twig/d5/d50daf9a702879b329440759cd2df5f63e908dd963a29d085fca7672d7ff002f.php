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
        $__internal_178d964197c86ffc1cc0db48b042c0801bc316054ae5292f6d107b5e4fd8e241 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_178d964197c86ffc1cc0db48b042c0801bc316054ae5292f6d107b5e4fd8e241->enter($__internal_178d964197c86ffc1cc0db48b042c0801bc316054ae5292f6d107b5e4fd8e241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_568ec5e2bf08e2a59f365ea19baa90b0a6f6b911179fcc522b07d8d1babe8729 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_568ec5e2bf08e2a59f365ea19baa90b0a6f6b911179fcc522b07d8d1babe8729->enter($__internal_568ec5e2bf08e2a59f365ea19baa90b0a6f6b911179fcc522b07d8d1babe8729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_178d964197c86ffc1cc0db48b042c0801bc316054ae5292f6d107b5e4fd8e241->leave($__internal_178d964197c86ffc1cc0db48b042c0801bc316054ae5292f6d107b5e4fd8e241_prof);

        
        $__internal_568ec5e2bf08e2a59f365ea19baa90b0a6f6b911179fcc522b07d8d1babe8729->leave($__internal_568ec5e2bf08e2a59f365ea19baa90b0a6f6b911179fcc522b07d8d1babe8729_prof);

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
