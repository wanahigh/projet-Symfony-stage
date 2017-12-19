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
        $__internal_347a49b630cc92b641bd4e2535a9f8e63fc17756c9fd2f7fb58abcd65decb916 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_347a49b630cc92b641bd4e2535a9f8e63fc17756c9fd2f7fb58abcd65decb916->enter($__internal_347a49b630cc92b641bd4e2535a9f8e63fc17756c9fd2f7fb58abcd65decb916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_e630a45f2723349d36cdc1eafcbc3f86d0b6740c0a27be3dcbdb0d7c62beebf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e630a45f2723349d36cdc1eafcbc3f86d0b6740c0a27be3dcbdb0d7c62beebf3->enter($__internal_e630a45f2723349d36cdc1eafcbc3f86d0b6740c0a27be3dcbdb0d7c62beebf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_347a49b630cc92b641bd4e2535a9f8e63fc17756c9fd2f7fb58abcd65decb916->leave($__internal_347a49b630cc92b641bd4e2535a9f8e63fc17756c9fd2f7fb58abcd65decb916_prof);

        
        $__internal_e630a45f2723349d36cdc1eafcbc3f86d0b6740c0a27be3dcbdb0d7c62beebf3->leave($__internal_e630a45f2723349d36cdc1eafcbc3f86d0b6740c0a27be3dcbdb0d7c62beebf3_prof);

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
