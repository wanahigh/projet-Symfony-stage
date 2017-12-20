<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_e6def5d283c7b0d3c2f6d145fe24878db5aac479fa3974963bcb40a89d46fa05 extends Twig_Template
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
        $__internal_f5b1a544f7f8c33abbc93062140ba72fc02c215db92bec6f80d01d4d266cea12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5b1a544f7f8c33abbc93062140ba72fc02c215db92bec6f80d01d4d266cea12->enter($__internal_f5b1a544f7f8c33abbc93062140ba72fc02c215db92bec6f80d01d4d266cea12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_57274872033ec3ca1234ad7be22a095ebc8593881eeef17ef69067c1417924e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57274872033ec3ca1234ad7be22a095ebc8593881eeef17ef69067c1417924e1->enter($__internal_57274872033ec3ca1234ad7be22a095ebc8593881eeef17ef69067c1417924e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_f5b1a544f7f8c33abbc93062140ba72fc02c215db92bec6f80d01d4d266cea12->leave($__internal_f5b1a544f7f8c33abbc93062140ba72fc02c215db92bec6f80d01d4d266cea12_prof);

        
        $__internal_57274872033ec3ca1234ad7be22a095ebc8593881eeef17ef69067c1417924e1->leave($__internal_57274872033ec3ca1234ad7be22a095ebc8593881eeef17ef69067c1417924e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
