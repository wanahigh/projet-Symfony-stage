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
        $__internal_7fefb076d6be53c5ba40fd2f07baa0de703257347474c156ab8f5e00bab00e1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fefb076d6be53c5ba40fd2f07baa0de703257347474c156ab8f5e00bab00e1f->enter($__internal_7fefb076d6be53c5ba40fd2f07baa0de703257347474c156ab8f5e00bab00e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_35cce92351d6bc1f2f6da5d01725604c3e89932f40b4b9762356ac1604287a92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35cce92351d6bc1f2f6da5d01725604c3e89932f40b4b9762356ac1604287a92->enter($__internal_35cce92351d6bc1f2f6da5d01725604c3e89932f40b4b9762356ac1604287a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_7fefb076d6be53c5ba40fd2f07baa0de703257347474c156ab8f5e00bab00e1f->leave($__internal_7fefb076d6be53c5ba40fd2f07baa0de703257347474c156ab8f5e00bab00e1f_prof);

        
        $__internal_35cce92351d6bc1f2f6da5d01725604c3e89932f40b4b9762356ac1604287a92->leave($__internal_35cce92351d6bc1f2f6da5d01725604c3e89932f40b4b9762356ac1604287a92_prof);

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
