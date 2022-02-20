<?php

namespace Drupal\texbar\Commands;

use Drupal\texbar\LibraryBuilderInterface;
use Drupal\Component\Datetime\TimeInterface;
use Drupal\Core\Asset\AssetCollectionOptimizerInterface;
use Drupal\Core\Asset\LibraryDiscoveryInterface;
use Drupal\Core\State\StateInterface;
use Drush\Commands\DrushCommands;
use GuzzleHttp\Client;
use Symfony\Component\HttpFoundation\Response;

/**
 * Drush integration for Texbar module.
 *
 * @todo Crete a test for this.
 */
class TexbarCommands extends DrushCommands {

  /**
   * Library discovery service.
   *
   * @var \Drupal\Core\Asset\LibraryDiscoveryInterface
   */
  protected $libraryDiscovery;

  /**
   * The HTTP client.
   *
   * @var \GuzzleHttp\Client
   */
  protected $httpClient;

  /**
   * The state key value store.
   *
   * @var \Drupal\Core\State\StateInterface
   */
  protected $state;

  /**
   * The time service.
   *
   * @var \Drupal\Component\Datetime\TimeInterface
   */
  protected $time;

  /**
   * Constructs the object.
   *
   * @param \Drupal\Core\Asset\LibraryDiscoveryInterface $library_discovery
   *   The library discovery service.
   * @param \GuzzleHttp\Client $http_client
   *   The HTTP client.
   * @param \Drupal\Core\State\StateInterface $state
   *   The state key value store.
   * @param \Drupal\Component\Datetime\TimeInterface $time
   *   The time service.
   */
  public function __construct(
    LibraryDiscoveryInterface $library_discovery,
    Client $http_client,
    StateInterface $state,
    TimeInterface $time
  ) {
    parent::__construct();
    $this->libraryDiscovery = $library_discovery;
    $this->httpClient = $http_client;
    $this->state = $state;
    $this->time = $time;
  }

  /**
   * Downloads the Markitup library required for TeXbar.
   *
   * @command texbar:download
   * @aliases texbar-download
   */
  public function downloadTexbar() {
    $io = $this->io();

    $source = LibraryBuilderInterface::CDN_URL;

    $destination = DRUPAL_ROOT . LibraryBuilderInterface::LIBRARY_PATH;

    \Drupal::service('file_system')->prepareDirectory($destination, FILE_CREATE_DIRECTORY);

    $this->httpClient->get($source, ['sink' => $destination .= '/jquery.markitup.js']);

    if (is_file($destination)) {
      $io->success("Markitup library has been downloaded into destination directory.");
    }
    else {
      $io->error("Markitup library has not been downloaded into destination directory.");
    }
  }

}
