<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_2b615e761bfed31166d09958f6695559bc9e196820eff59d889af7db1bf40ec2 extends Twig_Template
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
        $__internal_897cc201ffd512230aae268a49467ab3f607ac064a638fa0e82093f155e57caa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_897cc201ffd512230aae268a49467ab3f607ac064a638fa0e82093f155e57caa->enter($__internal_897cc201ffd512230aae268a49467ab3f607ac064a638fa0e82093f155e57caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_29050216a8533e4fdd66c91e6856d5d5d51de8d23b9569356e0dc0fd33f1e271 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29050216a8533e4fdd66c91e6856d5d5d51de8d23b9569356e0dc0fd33f1e271->enter($__internal_29050216a8533e4fdd66c91e6856d5d5d51de8d23b9569356e0dc0fd33f1e271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_897cc201ffd512230aae268a49467ab3f607ac064a638fa0e82093f155e57caa->leave($__internal_897cc201ffd512230aae268a49467ab3f607ac064a638fa0e82093f155e57caa_prof);

        
        $__internal_29050216a8533e4fdd66c91e6856d5d5d51de8d23b9569356e0dc0fd33f1e271->leave($__internal_29050216a8533e4fdd66c91e6856d5d5d51de8d23b9569356e0dc0fd33f1e271_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
