set :stage, :production

# Extended Server Syntax
# ======================

server "185.220.174.158", user: "enabl", port: "7685", roles: %w{web app db}
set :deploy_to, "/home/enabl/domains/enabldigital.com/public_html"
set :wpcli_remote_url, 'enabldigital.com'
set :wpcli_local_url, 'enabldigital.test'
set :tmp_dir, '/home/enabl/tmp'
set :keep_releases, 2
set :branch, 'master'

# you can set custom ssh options
# it's possible to pass any option but you need to keep in mind that net/ssh understand limited list of options
# you can see them in [net/ssh documentation](http://net-ssh.github.io/net-ssh/classes/Net/SSH.html#method-c-start)
# set it globally
set :ssh_options, {
  auth_methods: %w(publickey),
  user: 'enabl',
}

fetch(:default_env).merge!(wp_env: :production)
