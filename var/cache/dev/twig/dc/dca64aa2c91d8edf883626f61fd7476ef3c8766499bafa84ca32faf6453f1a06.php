<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_4822128f110c79cfa4fc06c797baaf5a1bb88fd6f7ec32a410c8a5f1a13dfa4a extends Twig_Template
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
        $__internal_8d79597fd4c4844526effe8a2a15a672f7c3a5c64e192c2132d5f31cf8189e3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d79597fd4c4844526effe8a2a15a672f7c3a5c64e192c2132d5f31cf8189e3e->enter($__internal_8d79597fd4c4844526effe8a2a15a672f7c3a5c64e192c2132d5f31cf8189e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_fedddc45a3af21dd67a9b6dbc08d388c90a16c7f17b2681b196719f9c3481402 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fedddc45a3af21dd67a9b6dbc08d388c90a16c7f17b2681b196719f9c3481402->enter($__internal_fedddc45a3af21dd67a9b6dbc08d388c90a16c7f17b2681b196719f9c3481402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_8d79597fd4c4844526effe8a2a15a672f7c3a5c64e192c2132d5f31cf8189e3e->leave($__internal_8d79597fd4c4844526effe8a2a15a672f7c3a5c64e192c2132d5f31cf8189e3e_prof);

        
        $__internal_fedddc45a3af21dd67a9b6dbc08d388c90a16c7f17b2681b196719f9c3481402->leave($__internal_fedddc45a3af21dd67a9b6dbc08d388c90a16c7f17b2681b196719f9c3481402_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
