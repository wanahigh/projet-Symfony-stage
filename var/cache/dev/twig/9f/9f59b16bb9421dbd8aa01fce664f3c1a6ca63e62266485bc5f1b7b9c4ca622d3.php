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
        $__internal_8d772b4acbee68d5d09321be51552f6d04299f16b0bd02cb02987f5fbb794cc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d772b4acbee68d5d09321be51552f6d04299f16b0bd02cb02987f5fbb794cc7->enter($__internal_8d772b4acbee68d5d09321be51552f6d04299f16b0bd02cb02987f5fbb794cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_54ae9a9037b2ebf0eba47751c980bc32acd8fe50b1f27109a093b24af0c56b03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54ae9a9037b2ebf0eba47751c980bc32acd8fe50b1f27109a093b24af0c56b03->enter($__internal_54ae9a9037b2ebf0eba47751c980bc32acd8fe50b1f27109a093b24af0c56b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_8d772b4acbee68d5d09321be51552f6d04299f16b0bd02cb02987f5fbb794cc7->leave($__internal_8d772b4acbee68d5d09321be51552f6d04299f16b0bd02cb02987f5fbb794cc7_prof);

        
        $__internal_54ae9a9037b2ebf0eba47751c980bc32acd8fe50b1f27109a093b24af0c56b03->leave($__internal_54ae9a9037b2ebf0eba47751c980bc32acd8fe50b1f27109a093b24af0c56b03_prof);

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
