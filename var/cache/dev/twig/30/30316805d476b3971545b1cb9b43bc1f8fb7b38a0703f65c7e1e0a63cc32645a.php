<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_bb70bc6eca82c333dfbd999d063010847510bbd37c5cacd51064d85a161254e0 extends Twig_Template
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
        $__internal_313725072fbbd1dcc1d59608125a81e738dd1dc791df51caa0144998c352c9b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_313725072fbbd1dcc1d59608125a81e738dd1dc791df51caa0144998c352c9b2->enter($__internal_313725072fbbd1dcc1d59608125a81e738dd1dc791df51caa0144998c352c9b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_2dd2ce8a5769fa412ce11772408e9481024b19b9feaaa006cd87352bff6ebd94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dd2ce8a5769fa412ce11772408e9481024b19b9feaaa006cd87352bff6ebd94->enter($__internal_2dd2ce8a5769fa412ce11772408e9481024b19b9feaaa006cd87352bff6ebd94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_313725072fbbd1dcc1d59608125a81e738dd1dc791df51caa0144998c352c9b2->leave($__internal_313725072fbbd1dcc1d59608125a81e738dd1dc791df51caa0144998c352c9b2_prof);

        
        $__internal_2dd2ce8a5769fa412ce11772408e9481024b19b9feaaa006cd87352bff6ebd94->leave($__internal_2dd2ce8a5769fa412ce11772408e9481024b19b9feaaa006cd87352bff6ebd94_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
