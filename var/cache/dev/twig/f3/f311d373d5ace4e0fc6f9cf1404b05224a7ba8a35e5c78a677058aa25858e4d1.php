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
        $__internal_67b60d133f114fb5164281b4cdc41430645c91ae06c035d09e01297f7a61fb56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67b60d133f114fb5164281b4cdc41430645c91ae06c035d09e01297f7a61fb56->enter($__internal_67b60d133f114fb5164281b4cdc41430645c91ae06c035d09e01297f7a61fb56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_4657b74eb222e7d4022fcad8b0e67464f36f6e051c5a99b5661bfad93ef9bb54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4657b74eb222e7d4022fcad8b0e67464f36f6e051c5a99b5661bfad93ef9bb54->enter($__internal_4657b74eb222e7d4022fcad8b0e67464f36f6e051c5a99b5661bfad93ef9bb54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_67b60d133f114fb5164281b4cdc41430645c91ae06c035d09e01297f7a61fb56->leave($__internal_67b60d133f114fb5164281b4cdc41430645c91ae06c035d09e01297f7a61fb56_prof);

        
        $__internal_4657b74eb222e7d4022fcad8b0e67464f36f6e051c5a99b5661bfad93ef9bb54->leave($__internal_4657b74eb222e7d4022fcad8b0e67464f36f6e051c5a99b5661bfad93ef9bb54_prof);

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
