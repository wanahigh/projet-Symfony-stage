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
        $__internal_cb1a987923a2e1a175e79d56ccdba53709de80ef5acd725639b53c8ebf46cb6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb1a987923a2e1a175e79d56ccdba53709de80ef5acd725639b53c8ebf46cb6b->enter($__internal_cb1a987923a2e1a175e79d56ccdba53709de80ef5acd725639b53c8ebf46cb6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_e9235b4058c383f35d9711d81f2665058de5367f03d10a226865f89887f56d03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9235b4058c383f35d9711d81f2665058de5367f03d10a226865f89887f56d03->enter($__internal_e9235b4058c383f35d9711d81f2665058de5367f03d10a226865f89887f56d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_cb1a987923a2e1a175e79d56ccdba53709de80ef5acd725639b53c8ebf46cb6b->leave($__internal_cb1a987923a2e1a175e79d56ccdba53709de80ef5acd725639b53c8ebf46cb6b_prof);

        
        $__internal_e9235b4058c383f35d9711d81f2665058de5367f03d10a226865f89887f56d03->leave($__internal_e9235b4058c383f35d9711d81f2665058de5367f03d10a226865f89887f56d03_prof);

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
