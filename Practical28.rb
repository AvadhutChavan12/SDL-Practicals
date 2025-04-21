require 'mail'
# Set up SMTP settings
Mail.defaults do
  delivery_method :smtp, {
    address: 'smtp.gmail.com',
    port: 587,
    user_name: 'chavanavd12@gmail.com',
password: 'vnsk bvik vyph ttxx'
    # authentication: :login,
    # enable_starttls_auto: true
  }
end

# Define email message
message = Mail.new do
  from 'chavanavd12@gmail.com'
  to 'chavanavadhut2004@gmail.com'
  subject 'Hello from Ruby!'
  body 'This is a test email sent from Ruby.'
puts "Sending email done!"
end

# Send email
message.deliver!