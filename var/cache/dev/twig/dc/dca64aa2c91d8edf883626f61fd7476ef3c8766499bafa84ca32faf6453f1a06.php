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
        $__internal_24a0407ce6a2316f4e2e92606023a928100bb9d28fc6b1895451065b8ae08abc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24a0407ce6a2316f4e2e92606023a928100bb9d28fc6b1895451065b8ae08abc->enter($__internal_24a0407ce6a2316f4e2e92606023a928100bb9d28fc6b1895451065b8ae08abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_5e413bb1dd4018e23b358554202c535d922daaed72c9833a5efc2992f0b231f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e413bb1dd4018e23b358554202c535d922daaed72c9833a5efc2992f0b231f7->enter($__internal_5e413bb1dd4018e23b358554202c535d922daaed72c9833a5efc2992f0b231f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_24a0407ce6a2316f4e2e92606023a928100bb9d28fc6b1895451065b8ae08abc->leave($__internal_24a0407ce6a2316f4e2e92606023a928100bb9d28fc6b1895451065b8ae08abc_prof);

        
        $__internal_5e413bb1dd4018e23b358554202c535d922daaed72c9833a5efc2992f0b231f7->leave($__internal_5e413bb1dd4018e23b358554202c535d922daaed72c9833a5efc2992f0b231f7_prof);

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
