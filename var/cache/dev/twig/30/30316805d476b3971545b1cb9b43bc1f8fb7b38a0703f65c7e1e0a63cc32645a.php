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
        $__internal_e609f35efbbfa71f012fc146e4392ab9bcaea50d1f4a4e390783471a370766d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e609f35efbbfa71f012fc146e4392ab9bcaea50d1f4a4e390783471a370766d3->enter($__internal_e609f35efbbfa71f012fc146e4392ab9bcaea50d1f4a4e390783471a370766d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_9537557f6b7c02ea7de1ea5ddc6845c7a9d0f7728510eec8967a925915f4db42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9537557f6b7c02ea7de1ea5ddc6845c7a9d0f7728510eec8967a925915f4db42->enter($__internal_9537557f6b7c02ea7de1ea5ddc6845c7a9d0f7728510eec8967a925915f4db42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_e609f35efbbfa71f012fc146e4392ab9bcaea50d1f4a4e390783471a370766d3->leave($__internal_e609f35efbbfa71f012fc146e4392ab9bcaea50d1f4a4e390783471a370766d3_prof);

        
        $__internal_9537557f6b7c02ea7de1ea5ddc6845c7a9d0f7728510eec8967a925915f4db42->leave($__internal_9537557f6b7c02ea7de1ea5ddc6845c7a9d0f7728510eec8967a925915f4db42_prof);

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
