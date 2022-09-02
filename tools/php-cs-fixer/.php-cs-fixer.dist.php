<?php declare(strict_types=1);
/**
 * Modify the finder dirs to match your project
 * See: https://mlocati.github.io/php-cs-fixer-configurator.
 */
$finder = (new PhpCsFixer\Finder())
    ->in(__DIR__)
    ->exclude(['.aws', '.docker', 'var']);

return (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setUsingCache(false)
    ->setRules([
        '@Symfony'                            => true,
        '@DoctrineAnnotation'                 => true,
        '@PHP81Migration'                     => true,
        '@PHP80Migration'                     => true,
        '@PHP80Migration:risky'               => true,
        'align_multiline_comment'             => [
            'comment_type' => 'all_multiline',
        ],
        'binary_operator_spaces'              => [
            'default' => 'align_single_space',
        ],
        'blank_line_before_statement'         => [
            'statements' => ['return', 'throw', 'try'],
        ],
        'blank_line_after_opening_tag'        => false,
        'linebreak_after_opening_tag'         => false,
        'combine_consecutive_issets'          => true,
        'combine_consecutive_unsets'          => true,
        'concat_space'                        => [
            'spacing' => 'one',
        ],
        'escape_implicit_backslashes'         => true,
        'explicit_string_variable'            => true,
        'function_to_constant'                => true,
        'is_null'                             => true,
        'mb_str_functions'                    => true,
        'modernize_types_casting'             => true,
        'multiline_comment_opening_closing'   => true,
        'native_function_invocation'          => [
            'include' => ['@internal'],
        ],
        'no_homoglyph_names'                  => true,
        'no_null_property_initialization'     => true,
        'no_superfluous_elseif'               => true,
        'no_unneeded_curly_braces'            => true,
        'no_useless_else'                     => true,
        'no_useless_return'                   => true,
        'no_whitespace_before_comma_in_array' => true,
        'non_printable_character'             => [
            'use_escape_sequences_in_strings' => true,
        ],
        'php_unit_construct'                  => true,
        'php_unit_dedicate_assert'            => true,
        'php_unit_expectation'                => true,
        'php_unit_mock'                       => true,
        'php_unit_namespaced'                 => true,
        'phpdoc_add_missing_param_annotation' => true,
        'phpdoc_no_empty_return'              => true,
        'phpdoc_order'                        => true,
        'psr_autoloading'                     => true,
        'self_accessor'                       => true,
        'error_suppression'                   => true,
        'single_quote'                        => true,
        'space_after_semicolon'               => true,
        'strict_comparison'                   => true,
        'strict_param'                        => true,
        'trailing_comma_in_multiline'         => true,
    ])
    ->setFinder($finder);
