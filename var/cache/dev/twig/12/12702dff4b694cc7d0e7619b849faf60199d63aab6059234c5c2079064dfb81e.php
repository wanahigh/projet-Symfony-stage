<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_3c91a58fb73f2e39eecca3c3988711d4fcd17476b413cced255703c7e475fbc6 extends Twig_Template
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
        $__internal_f00ddf5cd2fa257059540bffdd828377c2c9abe61b53494b43d284dd0527ba08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f00ddf5cd2fa257059540bffdd828377c2c9abe61b53494b43d284dd0527ba08->enter($__internal_f00ddf5cd2fa257059540bffdd828377c2c9abe61b53494b43d284dd0527ba08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_a5ad281048ba1b8a7aa3e81248249754d115fdf9ada875b785af51fd14b89603 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5ad281048ba1b8a7aa3e81248249754d115fdf9ada875b785af51fd14b89603->enter($__internal_a5ad281048ba1b8a7aa3e81248249754d115fdf9ada875b785af51fd14b89603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_f00ddf5cd2fa257059540bffdd828377c2c9abe61b53494b43d284dd0527ba08->leave($__internal_f00ddf5cd2fa257059540bffdd828377c2c9abe61b53494b43d284dd0527ba08_prof);

        
        $__internal_a5ad281048ba1b8a7aa3e81248249754d115fdf9ada875b785af51fd14b89603->leave($__internal_a5ad281048ba1b8a7aa3e81248249754d115fdf9ada875b785af51fd14b89603_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
