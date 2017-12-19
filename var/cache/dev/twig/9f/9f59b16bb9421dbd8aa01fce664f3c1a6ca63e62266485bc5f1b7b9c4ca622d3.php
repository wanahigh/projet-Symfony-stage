<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_62b8a723da0e14649e14c99bbf3f3dc95824e29bd9b9d04e73548f3db6182a8c extends Twig_Template
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
        $__internal_5b8a5cfc65721ebf0539c70895842c1a128442a029d19aabd6335e11f25cb1d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b8a5cfc65721ebf0539c70895842c1a128442a029d19aabd6335e11f25cb1d6->enter($__internal_5b8a5cfc65721ebf0539c70895842c1a128442a029d19aabd6335e11f25cb1d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_724fd54aaf53c07502692e2a86707e5fe284157ca36c0f3cb82b51d14469fd0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_724fd54aaf53c07502692e2a86707e5fe284157ca36c0f3cb82b51d14469fd0e->enter($__internal_724fd54aaf53c07502692e2a86707e5fe284157ca36c0f3cb82b51d14469fd0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_5b8a5cfc65721ebf0539c70895842c1a128442a029d19aabd6335e11f25cb1d6->leave($__internal_5b8a5cfc65721ebf0539c70895842c1a128442a029d19aabd6335e11f25cb1d6_prof);

        
        $__internal_724fd54aaf53c07502692e2a86707e5fe284157ca36c0f3cb82b51d14469fd0e->leave($__internal_724fd54aaf53c07502692e2a86707e5fe284157ca36c0f3cb82b51d14469fd0e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
