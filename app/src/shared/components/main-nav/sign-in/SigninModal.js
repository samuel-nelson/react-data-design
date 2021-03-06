import React from "react";
import {SignInForm} from "./SignInForm";

export const SignInModal = () => (
	<>
		<button type="button" className="btn btn-primary" data-toggle="modal" data-target="#signInModal">
			Sign In
		</button>

		<div className="modal fade" id="signInModal" tabIndex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			  aria-hidden="true">
			<div className="modal-dialog" role="document">
				<div className="modal-content">
					<div className="modal-header">
						<h5 className="modal-title" id="exampleModalLabel">Modal title</h5>
						<button type="button" className="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div className="modal-body">
						<SignInForm/>
					</div>
				</div>
			</div>
		</div>
	</>
);