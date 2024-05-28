<?php

namespace Drupal\graphql_search_api\Plugin\GraphQL\InputTypes;

use Drupal\graphql\Plugin\GraphQL\InputTypes\InputTypePluginBase;

/**
 * Condition input type.
 *
 * @GraphQLInputType(
 *   id = "fulltextInput",
 *   name = "FulltextInput",
 *   fields = {
 *     "keys" = "[String]!",
 *     "fields" = "[String]",
 *     "conjunction" = "String",
 *   }
 * )
 */
class FulltextInput extends InputTypePluginBase {

}
