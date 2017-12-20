<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_b0b62c2a463974e672c3f444e80020993e9e26580fdc9caf0969eee452a8da4b extends Twig_Template
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
        $__internal_2eeba3f53d0c5afc25bdcbd59d4e7926a16bce26a5617cb1980b35761bcacdad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2eeba3f53d0c5afc25bdcbd59d4e7926a16bce26a5617cb1980b35761bcacdad->enter($__internal_2eeba3f53d0c5afc25bdcbd59d4e7926a16bce26a5617cb1980b35761bcacdad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_6f357555b821ac1ef8183db6d4791983ffccbc49e70b3cef3673ea67035f2840 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f357555b821ac1ef8183db6d4791983ffccbc49e70b3cef3673ea67035f2840->enter($__internal_6f357555b821ac1ef8183db6d4791983ffccbc49e70b3cef3673ea67035f2840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_2eeba3f53d0c5afc25bdcbd59d4e7926a16bce26a5617cb1980b35761bcacdad->leave($__internal_2eeba3f53d0c5afc25bdcbd59d4e7926a16bce26a5617cb1980b35761bcacdad_prof);

        
        $__internal_6f357555b821ac1ef8183db6d4791983ffccbc49e70b3cef3673ea67035f2840->leave($__internal_6f357555b821ac1ef8183db6d4791983ffccbc49e70b3cef3673ea67035f2840_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
