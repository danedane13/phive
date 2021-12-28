<?php declare(strict_types=1);
/*
 * This file is part of Phive.
 *
 * Copyright (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de> and contributors
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function ($class): void {
        static $classes = null;

        if ($classes === null) {
            $classes = [
                'phario\\phive\\abstractrequestedpharresolver'         => '/services/resolver/AbstractRequestedPharResolver.php',
                'phario\\phive\\abstractresolvingstrategy'             => '/services/resolver/strategy/AbstractResolvingStrategy.php',
                'phario\\phive\\authconfig'                            => '/shared/config/AuthConfig.php',
                'phario\\phive\\authentication'                        => '/shared/http/Authentication.php',
                'phario\\phive\\authexception'                         => '/shared/exceptions/AuthException.php',
                'phario\\phive\\authxmlconfig'                         => '/shared/config/AuthXmlConfig.php',
                'phario\\phive\\authxmlconfigfilelocator'              => '/shared/config/AuthXmlConfigFileLocator.php',
                'phario\\phive\\basehash'                              => '/shared/hash/BaseHash.php',
                'phario\\phive\\basicauthentication'                   => '/shared/http/authentication/BasicAuthentication.php',
                'phario\\phive\\bearerauthentication'                  => '/shared/http/authentication/BearerAuthentication.php',
                'phario\\phive\\cachebackend'                          => '/shared/http/CacheBackend.php',
                'phario\\phive\\checksumservice'                       => '/services/checksum/ChecksumService.php',
                'phario\\phive\\cli\\coloredconsoleoutput'             => '/shared/cli/output/ColoredConsoleOutput.php',
                'phario\\phive\\cli\\command'                          => '/shared/cli/Command.php',
                'phario\\phive\\cli\\commandlocator'                   => '/shared/cli/CommandLocator.php',
                'phario\\phive\\cli\\commandlocatorexception'          => '/shared/cli/CommandLocatorException.php',
                'phario\\phive\\cli\\commandoptionsexception'          => '/shared/cli/CommandOptionsException.php',
                'phario\\phive\\cli\\consoleinput'                     => '/shared/cli/input/ConsoleInput.php',
                'phario\\phive\\cli\\consoleoutput'                    => '/shared/cli/output/ConsoleOutput.php',
                'phario\\phive\\cli\\consoletable'                     => '/shared/cli/output/ConsoleTable.php',
                'phario\\phive\\cli\\context'                          => '/shared/cli/Context.php',
                'phario\\phive\\cli\\contextexception'                 => '/shared/cli/ContextException.php',
                'phario\\phive\\cli\\generalcontext'                   => '/shared/cli/GeneralContext.php',
                'phario\\phive\\cli\\input'                            => '/shared/cli/input/Input.php',
                'phario\\phive\\cli\\options'                          => '/shared/cli/Options.php',
                'phario\\phive\\cli\\output'                           => '/shared/cli/output/Output.php',
                'phario\\phive\\cli\\outputfactory'                    => '/shared/cli/output/OutputFactory.php',
                'phario\\phive\\cli\\outputlocator'                    => '/shared/cli/output/OutputLocator.php',
                'phario\\phive\\cli\\request'                          => '/shared/cli/Request.php',
                'phario\\phive\\cli\\requestexception'                 => '/shared/cli/RequestException.php',
                'phario\\phive\\cli\\runner'                           => '/shared/cli/Runner.php',
                'phario\\phive\\cli\\runnerexception'                  => '/shared/cli/RunnerException.php',
                'phario\\phive\\commandlocator'                        => '/commands/CommandLocator.php',
                'phario\\phive\\compatibilityservice'                  => '/services/phar/CompatibilityService.php',
                'phario\\phive\\composeralias'                         => '/shared/ComposerAlias.php',
                'phario\\phive\\composercommand'                       => '/commands/composer/ComposerCommand.php',
                'phario\\phive\\composercommandconfig'                 => '/commands/composer/ComposerCommandConfig.php',
                'phario\\phive\\composercontext'                       => '/commands/composer/ComposerContext.php',
                'phario\\phive\\composerservice'                       => '/commands/composer/ComposerService.php',
                'phario\\phive\\compositeauthconfig'                   => '/shared/config/CompositeAuthConfig.php',
                'phario\\phive\\config'                                => '/shared/config/Config.php',
                'phario\\phive\\configexception'                       => '/shared/exceptions/ConfigException.php',
                'phario\\phive\\configuredphar'                        => '/shared/phar/ConfiguredPhar.php',
                'phario\\phive\\configuredpharexception'               => '/shared/phar/ConfiguredPharException.php',
                'phario\\phive\\curl'                                  => '/shared/http/Curl.php',
                'phario\\phive\\curlconfig'                            => '/shared/http/CurlConfig.php',
                'phario\\phive\\curlconfigbuilder'                     => '/shared/http/CurlConfigBuilder.php',
                'phario\\phive\\curlconfigexception'                   => '/shared/exceptions/CurlConfigException.php',
                'phario\\phive\\curlexception'                         => '/shared/exceptions/CurlException.php',
                'phario\\phive\\curlhttpclient'                        => '/shared/http/CurlHttpClient.php',
                'phario\\phive\\defaultcommand'                        => '/commands/default/DefaultCommand.php',
                'phario\\phive\\defaultcommandconfig'                  => '/commands/default/DefaultCommandConfig.php',
                'phario\\phive\\directurlresolver'                     => '/services/resolver/DirectUrlResolver.php',
                'phario\\phive\\downloadfailedexception'               => '/shared/exceptions/DownloadFailedException.php',
                'phario\\phive\\environment'                           => '/shared/environment/Environment.php',
                'phario\\phive\\environmentauthconfig'                 => '/shared/config/EnvironmentAuthConfig.php',
                'phario\\phive\\environmentexception'                  => '/shared/exceptions/EnvironmentException.php',
                'phario\\phive\\environmentlocator'                    => '/shared/environment/EnvironmentLocator.php',
                'phario\\phive\\errorexception'                        => '/shared/exceptions/ErrorException.php',
                'phario\\phive\\etag'                                  => '/shared/http/ETag.php',
                'phario\\phive\\exception'                             => '/shared/exceptions/Exception.php',
                'phario\\phive\\executor'                              => '/shared/executor/Executor.php',
                'phario\\phive\\executorexception'                     => '/shared/exceptions/ExecutorException.php',
                'phario\\phive\\executorresult'                        => '/shared/executor/ExecutorResult.php',
                'phario\\phive\\extensionsmissingexception'            => '/shared/exceptions/ExtensionsMissingException.php',
                'phario\\phive\\factory'                               => '/Factory.php',
                'phario\\phive\\filedownloader'                        => '/shared/download/FileDownloader.php',
                'phario\\phive\\filedownloaderexception'               => '/shared/FileDownloaderException.php',
                'phario\\phive\\filemigration'                         => '/services/migration/FileMigration.php',
                'phario\\phive\\filenotwritableexception'              => '/shared/exceptions/FileNotWritableException.php',
                'phario\\phive\\filestoragecachebackend'               => '/shared/http/FileStorageCacheBackend.php',
                'phario\\phive\\git'                                   => '/shared/Git.php',
                'phario\\phive\\gitawarephiveversion'                  => '/shared/version/GitAwarePhiveVersion.php',
                'phario\\phive\\gitexception'                          => '/shared/exceptions/GitException.php',
                'phario\\phive\\githubaliasresolver'                   => '/services/resolver/GithubAliasResolver.php',
                'phario\\phive\\githubaliasresolverexception'          => '/GithubAliasResolverException.php',
                'phario\\phive\\githubrepository'                      => '/shared/repository/GithubRepository.php',
                'phario\\phive\\gitlabaliasresolver'                   => '/services/resolver/GitlabAliasResolver.php',
                'phario\\phive\\gitlabrepository'                      => '/shared/repository/GitlabRepository.php',
                'phario\\phive\\globalphivexmlconfig'                  => '/shared/config/GlobalPhiveXmlConfig.php',
                'phario\\phive\\gnupg'                                 => '/shared/GnuPG.php',
                'phario\\phive\\gnupgkeydownloader'                    => '/services/key/gpg/GnupgKeyDownloader.php',
                'phario\\phive\\gnupgkeydownloaderexception'           => '/shared/exceptions/GnupgKeyDownloaderException.php',
                'phario\\phive\\gnupgkeyimporter'                      => '/services/key/gpg/GnupgKeyImporter.php',
                'phario\\phive\\gnupgsignatureverifier'                => '/services/signature/gpg/GnupgSignatureVerifier.php',
                'phario\\phive\\gnupgverificationresult'               => '/services/signature/gpg/GnupgVerificationResult.php',
                'phario\\phive\\hash'                                  => '/shared/hash/Hash.php',
                'phario\\phive\\helpcommand'                           => '/commands/help/HelpCommand.php',
                'phario\\phive\\homepharsxmlmigration'                 => '/services/migration/HomePharsXmlMigration.php',
                'phario\\phive\\homephivexmlmigration'                 => '/services/migration/HomePhiveXmlMigration.php',
                'phario\\phive\\httpclient'                            => '/shared/http/HttpClient.php',
                'phario\\phive\\httpexception'                         => '/shared/http/HttpException.php',
                'phario\\phive\\httpprogresshandler'                   => '/shared/http/HttpProgressHandler.php',
                'phario\\phive\\httpprogressrenderer'                  => '/shared/http/HttpProgressRenderer.php',
                'phario\\phive\\httpprogressupdate'                    => '/shared/http/HttpProgressUpdate.php',
                'phario\\phive\\httpresponse'                          => '/shared/http/HttpResponse.php',
                'phario\\phive\\httpresponseexception'                 => '/shared/http/HttpResponseException.php',
                'phario\\phive\\installationfailedexception'           => '/shared/exceptions/InstallationFailedException.php',
                'phario\\phive\\installcommand'                        => '/commands/install/InstallCommand.php',
                'phario\\phive\\installcommandconfig'                  => '/commands/install/InstallCommandConfig.php',
                'phario\\phive\\installcommandconfigexception'         => '/commands/install/InstallCommandConfigException.php',
                'phario\\phive\\installcontext'                        => '/commands/install/InstallContext.php',
                'phario\\phive\\installedphar'                         => '/shared/phar/InstalledPhar.php',
                'phario\\phive\\installservice'                        => '/services/phar/InstallService.php',
                'phario\\phive\\internalfilemigration'                 => '/services/migration/InternalFileMigration.php',
                'phario\\phive\\invalidhashexception'                  => '/shared/exceptions/InvalidHashException.php',
                'phario\\phive\\ioexception'                           => '/shared/exceptions/IOException.php',
                'phario\\phive\\jsondata'                              => '/shared/JsonData.php',
                'phario\\phive\\keydownloader'                         => '/services/key/KeyDownloader.php',
                'phario\\phive\\keyimporter'                           => '/services/key/KeyImporter.php',
                'phario\\phive\\keyimportresult'                       => '/services/key/KeyImportResult.php',
                'phario\\phive\\keyservice'                            => '/services/key/KeyService.php',
                'phario\\phive\\linkcreationfailedexception'           => '/shared/exceptions/LinkCreationFailedException.php',
                'phario\\phive\\listcommand'                           => '/commands/list/ListCommand.php',
                'phario\\phive\\localaliasresolver'                    => '/services/resolver/LocalAliasResolver.php',
                'phario\\phive\\localfirstresolvingstrategy'           => '/services/resolver/strategy/LocalFirstResolvingStrategy.php',
                'phario\\phive\\localphivexmlconfig'                   => '/shared/config/LocalPhiveXmlConfig.php',
                'phario\\phive\\localrepository'                       => '/shared/repository/LocalRepository.php',
                'phario\\phive\\localsourceslistfileloader'            => '/shared/sources/LocalSourcesListFileLoader.php',
                'phario\\phive\\localsslcertificate'                   => '/shared/http/LocalSslCertificate.php',
                'phario\\phive\\migratecommand'                        => '/commands/migrate/MigrateCommand.php',
                'phario\\phive\\migratecommandconfig'                  => '/commands/migrate/MigrateCommandConfig.php',
                'phario\\phive\\migratecontext'                        => '/commands/migrate/MigrateContext.php',
                'phario\\phive\\migration'                             => '/services/migration/Migration.php',
                'phario\\phive\\migrationexception'                    => '/shared/exceptions/MigrationException.php',
                'phario\\phive\\migrationfactory'                      => '/services/migration/MigrationFactory.php',
                'phario\\phive\\migrationservice'                      => '/services/migration/MigrationService.php',
                'phario\\phive\\migrationsfailedexception'             => '/shared/exceptions/MigrationsFailedException.php',
                'phario\\phive\\nogpgbinaryfoundexception'             => '/shared/exceptions/NoGPGBinaryFoundException.php',
                'phario\\phive\\notfoundexception'                     => '/shared/exceptions/NotFoundException.php',
                'phario\\phive\\outdatedcommand'                       => '/commands/outdated/OutdatedCommand.php',
                'phario\\phive\\outdatedconfig'                        => '/commands/outdated/OutdatedConfig.php',
                'phario\\phive\\outdatedconfigexception'               => '/commands/outdated/OutdatedConfigException.php',
                'phario\\phive\\outdatedcontext'                       => '/commands/outdated/OutdatedContext.php',
                'phario\\phive\\phar'                                  => '/shared/phar/Phar.php',
                'phario\\phive\\pharalias'                             => '/shared/phar/PharAlias.php',
                'phario\\phive\\phardownloader'                        => '/services/phar/PharDownloader.php',
                'phario\\phive\\pharexception'                         => '/shared/exceptions/PharException.php',
                'phario\\phive\\pharidentifier'                        => '/shared/phar/PharIdentifier.php',
                'phario\\phive\\pharinstaller'                         => '/services/phar/PharInstaller.php',
                'phario\\phive\\pharinstallerexception'                => '/shared/exceptions/PharInstallerException.php',
                'phario\\phive\\pharinstallerfactory'                  => '/services/phar/PharInstallerFactory.php',
                'phario\\phive\\pharinstallerlocator'                  => '/services/phar/PharInstallerLocator.php',
                'phario\\phive\\pharioaliasresolver'                   => '/services/resolver/PharIoAliasResolver.php',
                'phario\\phive\\phariorepository'                      => '/shared/repository/PharIoRepository.php',
                'phario\\phive\\pharregistry'                          => '/shared/PharRegistry.php',
                'phario\\phive\\pharregistryexception'                 => '/shared/exceptions/PharRegistryException.php',
                'phario\\phive\\pharservice'                           => '/services/phar/PharService.php',
                'phario\\phive\\pharurl'                               => '/shared/phar/PharUrl.php',
                'phario\\phive\\phivecontext'                          => '/PhiveContext.php',
                'phario\\phive\\phiveversion'                          => '/shared/version/PhiveVersion.php',
                'phario\\phive\\phivexmlconfig'                        => '/shared/config/PhiveXmlConfig.php',
                'phario\\phive\\phivexmlconfigfilelocator'             => '/shared/config/PhiveXmlConfigFileLocator.php',
                'phario\\phive\\projectphivexmlmigration'              => '/services/migration/ProjectPhiveXmlMigration.php',
                'phario\\phive\\publickey'                             => '/services/key/PublicKey.php',
                'phario\\phive\\publickeyexception'                    => '/shared/exceptions/PublicKeyException.php',
                'phario\\phive\\publickeyreader'                       => '/services/key/gpg/PublicKeyReader.php',
                'phario\\phive\\purgecommand'                          => '/commands/purge/PurgeCommand.php',
                'phario\\phive\\purgecontext'                          => '/commands/purge/PurgeContext.php',
                'phario\\phive\\ratelimit'                             => '/shared/http/RateLimit.php',
                'phario\\phive\\release'                               => '/shared/phar/Release.php',
                'phario\\phive\\releasecollection'                     => '/shared/phar/ReleaseCollection.php',
                'phario\\phive\\releaseexception'                      => '/shared/exceptions/ReleaseException.php',
                'phario\\phive\\releaseselector'                       => '/services/phar/ReleaseSelector.php',
                'phario\\phive\\remotefirstresolvingstrategy'          => '/services/resolver/strategy/RemoteFirstResolvingStrategy.php',
                'phario\\phive\\remotesourceslistfileloader'           => '/shared/sources/RemoteSourcesListFileLoader.php',
                'phario\\phive\\removecommand'                         => '/commands/remove/RemoveCommand.php',
                'phario\\phive\\removecommandconfig'                   => '/commands/remove/RemoveCommandConfig.php',
                'phario\\phive\\removecontext'                         => '/commands/remove/RemoveContext.php',
                'phario\\phive\\requestedphar'                         => '/shared/phar/RequestedPhar.php',
                'phario\\phive\\requestedpharresolver'                 => '/services/resolver/RequestedPharResolver.php',
                'phario\\phive\\requestedpharresolverfactory'          => '/services/resolver/RequestedPharResolverFactory.php',
                'phario\\phive\\requestedpharresolverservice'          => '/services/resolver/RequestedPharResolverService.php',
                'phario\\phive\\requestedpharresolverservicebuilder'   => '/services/resolver/RequestedPharResolverServiceBuilder.php',
                'phario\\phive\\resetcommand'                          => '/commands/reset/ResetCommand.php',
                'phario\\phive\\resetcommandconfig'                    => '/commands/reset/ResetCommandConfig.php',
                'phario\\phive\\resetcontext'                          => '/commands/reset/ResetContext.php',
                'phario\\phive\\resolveexception'                      => '/shared/exceptions/ResolveException.php',
                'phario\\phive\\resolvingstrategy'                     => '/services/resolver/strategy/ResolvingStrategy.php',
                'phario\\phive\\retryinghttpclient'                    => '/shared/http/RetryingHttpClient.php',
                'phario\\phive\\ringdowncurlhttpclient'                => '/shared/http/RingdownCurlHttpClient.php',
                'phario\\phive\\selfupdatecommand'                     => '/commands/selfupdate/SelfupdateCommand.php',
                'phario\\phive\\sha1hash'                              => '/shared/hash/sha/Sha1Hash.php',
                'phario\\phive\\sha256hash'                            => '/shared/hash/sha/Sha256Hash.php',
                'phario\\phive\\sha384hash'                            => '/shared/hash/sha/Sha384Hash.php',
                'phario\\phive\\sha512hash'                            => '/shared/hash/sha/Sha512Hash.php',
                'phario\\phive\\signatureverifier'                     => '/services/signature/SignatureVerifier.php',
                'phario\\phive\\skelcommand'                           => '/commands/skel/SkelCommand.php',
                'phario\\phive\\skelcommandconfig'                     => '/commands/skel/SkelCommandConfig.php',
                'phario\\phive\\skelcontext'                           => '/commands/skel/SkelContext.php',
                'phario\\phive\\source'                                => '/shared/sources/Source.php',
                'phario\\phive\\sourcerepository'                      => '/shared/repository/SourceRepository.php',
                'phario\\phive\\sourceslist'                           => '/shared/sources/SourcesList.php',
                'phario\\phive\\sourceslistexception'                  => '/shared/exceptions/SourcesListException.php',
                'phario\\phive\\sourceslistfileloader'                 => '/shared/sources/SourcesListFileLoader.php',
                'phario\\phive\\staticphiveversion'                    => '/shared/version/StaticPhiveVersion.php',
                'phario\\phive\\statuscommand'                         => '/commands/status/StatusCommand.php',
                'phario\\phive\\statuscommandconfig'                   => '/commands/status/StatusCommandConfig.php',
                'phario\\phive\\statuscontext'                         => '/commands/status/StatusContext.php',
                'phario\\phive\\supportedrelease'                      => '/shared/phar/SupportedRelease.php',
                'phario\\phive\\targetdirectorylocator'                => '/shared/TargetDirectoryLocator.php',
                'phario\\phive\\tokenauthentication'                   => '/shared/http/authentication/TokenAuthentication.php',
                'phario\\phive\\trustedcollection'                     => '/services/key/TrustedCollection.php',
                'phario\\phive\\unixoidenvironment'                    => '/shared/environment/UnixoidEnvironment.php',
                'phario\\phive\\unixoidpharinstaller'                  => '/services/phar/UnixoidPharInstaller.php',
                'phario\\phive\\unsupportedrelease'                    => '/shared/phar/UnsupportedRelease.php',
                'phario\\phive\\unsupportedversionconstraintexception' => '/shared/exceptions/UnsupportedVersionConstraintException.php',
                'phario\\phive\\updatecommand'                         => '/commands/update/UpdateCommand.php',
                'phario\\phive\\updatecommandconfig'                   => '/commands/update/UpdateCommandConfig.php',
                'phario\\phive\\updatecontext'                         => '/commands/update/UpdateContext.php',
                'phario\\phive\\updaterepositorylistcommand'           => '/commands/update-repository-list/UpdateRepositoryListCommand.php',
                'phario\\phive\\url'                                   => '/shared/Url.php',
                'phario\\phive\\urlrepository'                         => '/shared/repository/UrlRepository.php',
                'phario\\phive\\usedphar'                              => '/shared/phar/UsedPhar.php',
                'phario\\phive\\userfilemigration'                     => '/services/migration/UserFileMigration.php',
                'phario\\phive\\verificationfailedexception'           => '/shared/exceptions/VerificationFailedException.php',
                'phario\\phive\\verificationresult'                    => '/services/signature/VerificationResult.php',
                'phario\\phive\\versioncommand'                        => '/commands/version/VersionCommand.php',
                'phario\\phive\\windowsenvironment'                    => '/shared/environment/WindowsEnvironment.php',
                'phario\\phive\\windowspharinstaller'                  => '/services/phar/WindowsPharInstaller.php',
                'phario\\phive\\xmlfile'                               => '/shared/XmlFile.php'
            ];
        }
        $cn = strtolower($class);

        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    },
    true,
    false
);
// @codeCoverageIgnoreEnd
