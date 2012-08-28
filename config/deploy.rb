set :application, "s4u"
set :repository,  "git@github.com:sdc/Services-for-you-pages.git"
set :deploy_to, "/srv/static/#{application}"
default_run_options[:pty] = true

set :scm, :git
# Or: `accurev`, `bzr`, `cvs`, `darcs`, `git`, `mercurial`, `perforce`, `subversion` or `none`
set :user, "webteam"
set :scm_passphrase, "OMG!itwtp455"

role :web, "172.20.1.50"                 
role :app, "172.20.1.50"                  
role :db,  "172.20.1.50", :primary => true 

namespace :deploy do
  task :start do ; end
  task :stop do ; end
  task :restart, :roles => :app, :except => { :no_release => true } do
    run "#{try_sudo} touch restart.txt"
  end
end

after "deploy:create_symlink" do
  run "ln -s #{shared_path}/constants.php #{current_path}/assets/includes/constants.php"
  end
  run "chmod a+rw -R #{current_path}"
end

after "deploy:finalize_update", "db:db_config"
