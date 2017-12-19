<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_a576560440c51d17bc002033fdaf39de26b05bfb5923eb998b3b6fcdf717dc89 extends Twig_Template
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
        $__internal_c5e5a8d21bf6e4b449b11433c40ed6dc8dc669a8aece86a267d268a840560b4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5e5a8d21bf6e4b449b11433c40ed6dc8dc669a8aece86a267d268a840560b4e->enter($__internal_c5e5a8d21bf6e4b449b11433c40ed6dc8dc669a8aece86a267d268a840560b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_41151bae3f6473ed85f19e9a46acddd6636934b704ae97bcdcc58d23e08dc4d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41151bae3f6473ed85f19e9a46acddd6636934b704ae97bcdcc58d23e08dc4d9->enter($__internal_41151bae3f6473ed85f19e9a46acddd6636934b704ae97bcdcc58d23e08dc4d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_c5e5a8d21bf6e4b449b11433c40ed6dc8dc669a8aece86a267d268a840560b4e->leave($__internal_c5e5a8d21bf6e4b449b11433c40ed6dc8dc669a8aece86a267d268a840560b4e_prof);

        
        $__internal_41151bae3f6473ed85f19e9a46acddd6636934b704ae97bcdcc58d23e08dc4d9->leave($__internal_41151bae3f6473ed85f19e9a46acddd6636934b704ae97bcdcc58d23e08dc4d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
