<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_b3ae63a498560a05a662fb95a8d57bede03b750fe7fc7851fb1946aea336cc96 extends Twig_Template
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
        $__internal_7c183e3e8da7a5d871d189074f8a62b7a28cd07c18f76eef08d9d678f019c6cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c183e3e8da7a5d871d189074f8a62b7a28cd07c18f76eef08d9d678f019c6cc->enter($__internal_7c183e3e8da7a5d871d189074f8a62b7a28cd07c18f76eef08d9d678f019c6cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_9b5b235c4ba62c992155b7da9eff5a4a2c1ecf8e36e41460ce5c6339e30ce43e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b5b235c4ba62c992155b7da9eff5a4a2c1ecf8e36e41460ce5c6339e30ce43e->enter($__internal_9b5b235c4ba62c992155b7da9eff5a4a2c1ecf8e36e41460ce5c6339e30ce43e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_7c183e3e8da7a5d871d189074f8a62b7a28cd07c18f76eef08d9d678f019c6cc->leave($__internal_7c183e3e8da7a5d871d189074f8a62b7a28cd07c18f76eef08d9d678f019c6cc_prof);

        
        $__internal_9b5b235c4ba62c992155b7da9eff5a4a2c1ecf8e36e41460ce5c6339e30ce43e->leave($__internal_9b5b235c4ba62c992155b7da9eff5a4a2c1ecf8e36e41460ce5c6339e30ce43e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
