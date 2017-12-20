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
        $__internal_fd2e5836fd4f7f6a48d8eaee87cbb81aa09f8dc9876bc23be049c49bb2f71317 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd2e5836fd4f7f6a48d8eaee87cbb81aa09f8dc9876bc23be049c49bb2f71317->enter($__internal_fd2e5836fd4f7f6a48d8eaee87cbb81aa09f8dc9876bc23be049c49bb2f71317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_9e624b2d527419e672a4bf3188c2088c180f4087cf5a64cb317ef4ee385ea418 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e624b2d527419e672a4bf3188c2088c180f4087cf5a64cb317ef4ee385ea418->enter($__internal_9e624b2d527419e672a4bf3188c2088c180f4087cf5a64cb317ef4ee385ea418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_fd2e5836fd4f7f6a48d8eaee87cbb81aa09f8dc9876bc23be049c49bb2f71317->leave($__internal_fd2e5836fd4f7f6a48d8eaee87cbb81aa09f8dc9876bc23be049c49bb2f71317_prof);

        
        $__internal_9e624b2d527419e672a4bf3188c2088c180f4087cf5a64cb317ef4ee385ea418->leave($__internal_9e624b2d527419e672a4bf3188c2088c180f4087cf5a64cb317ef4ee385ea418_prof);

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
