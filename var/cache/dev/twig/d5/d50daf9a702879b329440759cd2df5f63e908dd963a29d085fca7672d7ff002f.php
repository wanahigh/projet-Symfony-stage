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
        $__internal_1c93107fb2f777313f169eeb0c5b2225bc5aabba2f3ff1f63915fec8875d2bbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c93107fb2f777313f169eeb0c5b2225bc5aabba2f3ff1f63915fec8875d2bbe->enter($__internal_1c93107fb2f777313f169eeb0c5b2225bc5aabba2f3ff1f63915fec8875d2bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_a966bc82e1de787d2d5be500c7723ab1d081697ed4175f691263ac3d08eeb9b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a966bc82e1de787d2d5be500c7723ab1d081697ed4175f691263ac3d08eeb9b1->enter($__internal_a966bc82e1de787d2d5be500c7723ab1d081697ed4175f691263ac3d08eeb9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_1c93107fb2f777313f169eeb0c5b2225bc5aabba2f3ff1f63915fec8875d2bbe->leave($__internal_1c93107fb2f777313f169eeb0c5b2225bc5aabba2f3ff1f63915fec8875d2bbe_prof);

        
        $__internal_a966bc82e1de787d2d5be500c7723ab1d081697ed4175f691263ac3d08eeb9b1->leave($__internal_a966bc82e1de787d2d5be500c7723ab1d081697ed4175f691263ac3d08eeb9b1_prof);

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
