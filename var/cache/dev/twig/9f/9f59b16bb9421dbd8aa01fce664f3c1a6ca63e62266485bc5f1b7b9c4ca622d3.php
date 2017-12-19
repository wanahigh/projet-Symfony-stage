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
        $__internal_5ff928a05c1366047e814403b0038db21ea41c9fd33142c42565e438fda0c838 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ff928a05c1366047e814403b0038db21ea41c9fd33142c42565e438fda0c838->enter($__internal_5ff928a05c1366047e814403b0038db21ea41c9fd33142c42565e438fda0c838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_03174ad71eabfd1c42f752dac0bef24088f94a6c5dd8b03a977f6d025605d28c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03174ad71eabfd1c42f752dac0bef24088f94a6c5dd8b03a977f6d025605d28c->enter($__internal_03174ad71eabfd1c42f752dac0bef24088f94a6c5dd8b03a977f6d025605d28c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_5ff928a05c1366047e814403b0038db21ea41c9fd33142c42565e438fda0c838->leave($__internal_5ff928a05c1366047e814403b0038db21ea41c9fd33142c42565e438fda0c838_prof);

        
        $__internal_03174ad71eabfd1c42f752dac0bef24088f94a6c5dd8b03a977f6d025605d28c->leave($__internal_03174ad71eabfd1c42f752dac0bef24088f94a6c5dd8b03a977f6d025605d28c_prof);

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
