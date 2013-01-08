set :application, "s4u-pages"
set :repository,  "git@github.com:sdc/Services-for-you-pages.git"
set :deploy_to, "/srv/#{application}"
default_run_options[:pty] = true

set :scm, :git
# Or: `accurev`, `bzr`, `cvs`, `darcs`, `git`, `mercurial`, `perforce`, `subversion` or `none`

role :web, "172.21.1.53"                 
role :app, "172.21.1.53"                  
role :db,  "172.21.1.53", :primary => true 

namespace :deploy do
  task :start do ; end
  task :stop do ; end
  task :restart, :roles => :app, :except => { :no_release => true } do
    run "#{try_sudo} touch restart.txt"
  end
end

after "deploy:create_symlink" do
  run "ln -s #{shared_path}/constants.php #{current_path}/assets/includes/constants.php"
  run "ln -sf #{current_path}/assets #{current_path}/devonstudioschool.co.uk/assets"
  run "ln -sf #{current_path}/assets #{current_path}/horizonsrestaurant.info/assets"
  run "ln -sf #{current_path}/assets #{current_path}/paigntonvenuehire.co.uk/assets"
  run "ln -sf #{current_path}/assets #{current_path}/rec1.co.uk/assets"
  run "ln -sf #{current_path}/assets #{current_path}/sdcfriends.co.uk/assets"
  run "ln -sf #{current_path}/assets #{current_path}/theenergycentre.net/assets"
  run "chmod a+rw -R #{current_path}"
end
